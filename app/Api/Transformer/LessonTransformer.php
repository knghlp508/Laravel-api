<?php
namespace App\Api\Transformer;


use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract
{
    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'is_free' => (boolean)$lesson['free']
        ];
    }
}