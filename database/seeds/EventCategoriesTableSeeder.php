<?php

use Illuminate\Database\Seeder;
use App\EventCategory;

class EventCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Timeline Event Categories
        EventCategory::create([ 'category' => "Family Background" ]);
        EventCategory::create([ 'category' => "Education" ]);
        EventCategory::create([ 'category' => "Work Housing" ]);
        EventCategory::create([ 'category' => "Social Relationships" ]);
        EventCategory::create([ 'category' => "Criminal Justice" ]);
        EventCategory::create([ 'category' => "Exploitation" ]);
        EventCategory::create([ 'category' => "Services" ]);
    }
}
