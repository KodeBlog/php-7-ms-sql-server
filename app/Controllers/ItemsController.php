<?php

namespace KodeBlog\Controllers;

use KodeBlog\Models\Item;

class ItemsController
{
    public static function index()
    {
        global $base_url, $action;
        $title = 'Items Listing';
        $view = 'items/list';
        $data = Item::all();

        require './app/Views/templates/layout.html';
    }

    public static function create()
    {
        global $base_url, $action;
        $title = 'Create New Item';
        $view = 'items/create';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            Item::create($_POST);
            header("Location: $base_url?action=list");
        } else {
            require './app/Views/templates/layout.html';
        }
    }

    public static function edit($id)
    {
        global $base_url, $action;
        $title = 'Edit Item';
        $view = 'items/edit';
        $item = Item::find($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $item->item = $_POST['item'];
            $item->description = $_POST['description'];
            $item->status = $_POST['status'];
            $item->save();
            header("Location: $base_url?action=list");
        } else {
            require './app/Views/templates/layout.html';
        }
    }

    public static function delete($id)
    {
        global $base_url, $action;
        $title = 'Delete Item';
        $view = 'items/delete';
        $item = Item::find($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $item->delete();

            header("Location: $base_url?action=list");
        } else {
            require './app/Views/templates/layout.html';
        }
    }
}
