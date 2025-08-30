<?php


namespace App\classes;
class Blog
{

    public static $blogs = [];

    public static function getAllBlog()
    {
        self::$blogs= [
            0 =>[
                'id' => 1,
                'title' => 'this is blog title one',
                'description_one' => 'This is blog one description one',
                'description_two' => 'This is blog one description two',
                'image'           => 'assets/img/pic1.jpg',
            ],
            1 =>[
                'id' => 2,
                'title' => 'this is blog title two',
                'description_one' => 'This is blog one description one',
                'description_two' => 'This is blog one description two',
                'image'           => 'assets/img/pic2.jpg',
            ],
            2 =>[
                'id' => 3,
                'title' => 'this is blog title three',
                'description_one' => 'This is blog one description one',
                'description_two' => 'This is blog one description two',
                'image'           => 'assets/img/pic3.jpg',
            ],
            3 =>[
                'id' => 4,
                'title' => 'this is blog title four',
                'description_one' => 'This is blog one description one',
                'description_two' => 'This is blog one description two',
                'image'           => 'assets/img/pic4.jpg',
            ],
        ];
        return self::$blogs;
    }

    public static function getBlogById($id)
    {
        foreach (self::getAllBlog() as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
                break;
            }
        }
    }

}