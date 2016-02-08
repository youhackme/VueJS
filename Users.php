<?php

/**
 * Created by PhpStorm.
 * User: Hyder Bangash
 * Date: 2/8/16
 * Time: 1:40 PM
 */
if($_GET['method']=='all'){

    $data[] = array(
        'id'=>1,
        'name'=>'Hyder Bangash',
        'email'=>'ismaakeel@gmail.com',
        'address'=>'Mauritius',
        'createdAt'=>'2015-05-01',
        'updatedAt'=>'2015-02-05'
    );

    $data[] = array(
        'id'=>2,
        'name'=>'John Doe ',
        'email'=>'john@gmail.com',
        'address'=>'France',
        'createdAt'=>'2015-05-01',
        'updatedAt'=>'2015-02-05'
    );

    $data[] = array(
        'id'=>3,
        'name'=>'Mary Jane ',
        'email'=>'mary@gmail.com',
        'address'=>'USA',
        'createdAt'=>'2016-05-01',
        'updatedAt'=>'2016-02-05'
    );

    echo json_encode($data);

}


if($_GET['method']=='add'){

    $request_body = file_get_contents('php://input');


    $data[] = array(
        'id'=>1,
        'name'=>'Hyder Bangash',
        'email'=>'ismaakeel@gmail.com',
        'address'=>'Mauritius',
        'createdAt'=>'2015-05-01',
        'updatedAt'=>'2015-02-05'
    );

    $data[] = array(
        'id'=>2,
        'name'=>'John Doe ',
        'email'=>'john@gmail.com',
        'address'=>'France',
        'createdAt'=>'2015-05-01',
        'updatedAt'=>'2015-02-05'
    );

    $data[] = array(
        'id'=>3,
        'name'=>'Mary Jane ',
        'email'=>'mary@gmail.com',
        'address'=>'USA',
        'createdAt'=>'2016-05-01',
        'updatedAt'=>'2016-02-05'
    );

    $newData = json_decode($request_body);
    $data[] =$data;
    echo json_encode($data);

}


