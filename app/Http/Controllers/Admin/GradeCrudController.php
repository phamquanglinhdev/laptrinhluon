<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GradeRequest;
use App\Models\Grade;
use App\Models\Tag;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Controllers\Operations\CloneOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GradeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GradeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Grade::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/grade');
        CRUD::setEntityNameStrings('Lớp học', 'Các lớp học');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('code')->label("Mã khóa học");
        CRUD::column('category_id')->label("Danh mục");
        CRUD::column('name')->label("Tên khóa học");
//        CRUD::column('description')->label("Giới thiệu")->limit(20);
        CRUD::addColumn([
            'name' => 'type',
            'label' => 'Loại',
            'type' => 'select_from_array',
            'options' => [
                'Template',
                'Regular',
            ]
        ]);

        CRUD::addColumn([
            'name' => 'price',
            'label' => 'Giá',
            'type' => 'model_function',
            'function_name' => 'getPrice',
        ]);
        CRUD::column('thumbnail')->type("image")->label("Ảnh khóa học");
        CRUD::column('instructor')->type("select")->model("App\Models\User")->entity("User")->attribute("name")->label("Đứng lớp");
        CRUD::column("status")->type("select_from_array")->options(["Đang tuyển sinh", "Đang dạy", "Đã kết thúc"])->label("Trạng thái lớp học");


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
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
        CRUD::setValidation(GradeRequest::class);

        CRUD::addField([
            'name' => 'category_id',
            'type' => 'select2',
            'entity' => 'Category',
            'attribute' => 'name',
            'model' => 'App\Models\Category'
        ]);
        CRUD::addField([
            'name' => 'type',
            'type' => 'select_from_array',
            'label' => 'Trạng thái',
            'options' => [
                'Template',
                'Regular',
            ]
        ]);
        CRUD::field('name')->label("Tên khóa học");
        CRUD::field('description')->label("Giới thiệu ngắn")->type("textarea");
        CRUD::field('thumbnail')->label("Ảnh bìa lớp")->type("image")->crop(true)->aspect_ratio(720 / 403);
        CRUD::addField([
            'name' => 'features',
            'label' => 'Chức năng',
            'type' => 'repeatable',
            'fields' => [ // also works as: "fields"
                [
                    'name' => 'start',
                    'type' => 'date',
                    'label' => 'Thời gian bắt đầu',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name' => 'duration',
                    'type' => 'text',
                    'label' => 'Thời gian dạy',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name' => 'lesson',
                    'type' => 'text',
                    'label' => 'Số buổi học',
                    'suffix' => 'Buổi',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name' => 'seat',
                    'type' => 'number',
                    'label' => 'Số lượng học viên',
                    'suffix' => 'Học viên',
                    'wrapper' => ['class' => 'form-group col-md-6'],
                ],
                [
                    'name' => 'price',
                    'type' => 'number',
                    'label' => 'Giá của khóa học',
                    'suffix' => 'đ',
                ],

            ],
            'new_item_label' => 'Add Group', // customize the text of the button
            'init_rows' => 1, // number of empty rows to be initialized, by default 1
            'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
            'max_rows' => 1, // maximum rows allowed, when reached the "new item" button will be hidden
            // allow reordering?
        ]);
        CRUD::addField([
            'name' => 'details',
            'label' => 'Thông tin thêm',
            'type' => 'repeatable',
            'fields' => [ // also works as: "fields"
                [
                    'name' => 'about',
                    'type' => 'tinymce',
                    'label' => 'Giới thiệu khóa học',
                ],
                [
                    'name' => 'award',
                    'type' => 'tinymce',
                    'label' => 'Nhận được gì sau khóa học',
                ],
            ],
            'new_item_label' => 'Add Group', // customize the text of the button
            'init_rows' => 1, // number of empty rows to be initialized, by default 1
            'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
            'max_rows' => 1, // maximum rows allowed, when reached the "new item" button will be hidden
            // allow reordering?
        ]);
        CRUD::addField([
            'name' => 'syllabus',
            'label' => 'Giáo trình',
            'type' => 'repeatable',
            'fields' => [ // also works as: "fields"
                [
                    'name' => 'name',
                    'type' => 'text',
                    'label' => 'Tên phần',
                ],
                [
                    'name' => 'lesson',
                    'label' => 'Bài',
                    'type' => 'table',
                    'columns' => [
                        'name' => 'Tên bài học',
                        'video' => 'Link Youtube Video',
                        'attachment' => 'Tài liệu',
                        'public' => 'Công khai (Có/Không)'
                    ]
                ],
            ],
            'new_item_label' => 'Thêm phần', // customize the text of the button
            'init_rows' => 0, // number of empty rows to be initialized, by default 1
            'min_rows' => 0, // minimum rows allowed, when reached the "delete" buttons will be hidden
//            'max_rows' => 1, // maximum rows allowed, when reached the "new item" button will be hidden
            // allow reordering?
        ]);
        CRUD::field('code')->label("Mã khóa học");
        CRUD::addField([
            'name' => 'instructor',
            'type' => 'select2',
            'entity' => 'User',
            'attribute' => 'name',
            'model' => 'App\Models\User',
            'label' => 'Đứng lớp'
        ]);
        CRUD::field("status")->type("select_from_array")->options(["Đang tuyển sinh", "Đang dạy", "Đã kết thúc"])->label("Trạng thái lớp học");
        CRUD::addField([
            'name' => 'Tag',
            'type' => 'relationship',
            'entity' => 'Tag',
            'pivot' => true,
            'label' => 'Nhãn',
            'attribute' => 'name',
            'model' => Tag::class,
        ]);
        CRUD::addField([
            'name' => 'BelongStudent',
            'type' => 'relationship',
            'entity' => 'BelongStudent',
            'label' => 'Học viên của khóa',
            'attribute' => 'name',
            'pivot' => true,
            'model' => User::class,
        ]);
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
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
