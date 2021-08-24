<?php

namespace Database\Factories;

use App\Models\deleted_conversation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeletedConversationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = deleted_conversation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
