<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumns([
            [
                'name' => 'name',
            ],
            [
                'name' => 'slug'
            ],
            [
                'name' => 'status',
                'type' => 'select_from_array',
                'options' => Product::STATUSES
            ]
        ]);

        CRUD::filter('category_id')
            ->type('select2')
            ->values(function () {
                return Category::all()->pluck('name', 'id')->toArray();
            });

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        CRUD::addField([ // Text
            'name'  => 'name',
            'label' => 'Name',
            'type'  => 'text',
            'tab'   => 'Texts',
        ]);

        CRUD::addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'slug',
            'hint' => 'Will be automatically generated from your name, if left empty.',
            'tab'   => 'Texts',
        ]);

        CRUD::addField([   // Textarea
            'name'  => 'short_description',
            'label' => 'Short description',
            'type'  => 'textarea',
            'tab'   => 'Texts',
        ]);

        CRUD::addField([   // Wysiwyg
            'name'  => 'description',
            'label' => 'description',
            'type'  => 'summernote',
            'options' => [],
            'tab'   => 'Texts',
        ]);

        CRUD::addField([  // Select2
            'label'     => 'Category',
            'type'      => 'select2',
            'name'      => 'category_id', // the db column for the foreign key
            'entity'    => 'category', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            // 'wrapperAttributes' => [
            //     'class' => 'form-group col-md-6'
            //   ], // extra HTML attributes for the field wrapper - mostly for resizing fields
            'tab' => 'Basic Info',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([   // Number
            'name'  => 'price',
            'label' => 'Price',
            'type'  => 'number',
            'prefix' => 'INR',
            'tab' => 'Basic Info',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([
            'name'  => 'meta',
            'label' => 'Meta',
            'type'  => 'repeatable',
            'tab' => 'Metas',
            'subfields' => [
                [
                    'name'  => 'meta_title',
                    'label' => 'Meta title',
                    'type'  => 'text',
                ],
                [
                    'name'  => 'meta_description',
                    'label' => 'Meta description',
                    'type'  => 'text',
                ],
                [
                    'name'  => 'meta_keywords',
                    'label' => 'Meta keywords',
                    'type'  => 'text',
                ]
            ],
            'init_rows' => 1,
            'min_rows' => 1,
            'max_rows' => 1,
        ]);

        CRUD::field('images')
            ->type('browse_multiple')
            ->label('Images')
            ->sortable(true)
            ->tab('Media');

        CRUD::addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'select_from_array',
            'options' => Product::STATUSES,
            'tab'   => 'Basic Info',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::addField([
            'name'  => 'is_custom',
            'label' => 'Is Custom',
            'type'  => 'switch',
            'tab'   => 'Basic Info',
            'onLabel' => '✓',
            'offLabel' => '✕',
        ]);

        CRUD::addField([
            'name'  => 'inventory',
            'label' => 'Inventory',
            'tab'   => 'Basic Info',
            'type'  => 'repeatable',
            'init_rows' => 1,
            'min_rows' => 1,
            'new_item_label' => 'Add more',
            'subfields' => [
                [
                    'name'  => 'size',
                    'label' => 'Size',
                    'type'  => 'select_from_array',
                    'options' => Product::SIZES,
                    'default' => 0,
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name'  => 'quantity',
                    'label' => 'Quantity',
                    'type'  => 'number',
                    'default' => 1,
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ]
            ],
        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
