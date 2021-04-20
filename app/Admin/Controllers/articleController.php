<?php

namespace App\Admin\Controllers;

use App\Models\Models\Blog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Closure;

class articleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());


        $grid->column('id', __('id'));
        $grid->column('title', __('title'));
        $grid->column('article', __('article'));
        $grid->column('star', __('star'));
        $grid->column('tag', __('tag'));
     
        

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Blog::findOrFail($id));


        $grid->column('id', __('id'));
        $grid->column('title', __('title'));
        $grid->column('article', __('article'));
        $grid->column('star', __('star'));
        $grid->column('tag', __('tag'));
        
        

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Blog());


        $form->text('title', __('title'));
        $form->text('article', __('article'));
        $form->text('tag', __('tag'));
        $form->number('star', __('star'));
        $form->image('image',_('image'));
        

        return $form;
    }
}
