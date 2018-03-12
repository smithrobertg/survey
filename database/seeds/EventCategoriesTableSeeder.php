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
        EventCategory::create([ 'category' => "Family Background", 'title' => "Family Background" ]);
        EventCategory::create([ 'category' => "Education", 'title' => "Education" ]);
        EventCategory::create([ 'category' => "Work Housing", 'title' => "Work Housing" ]);
        EventCategory::create([ 'category' => "Social Relationships", 'title' => "Social Relationships" ]);
        EventCategory::create([ 'category' => "Criminal Justice", 'title' => "Criminal Justice" ]);
        EventCategory::create([ 'category' => "Exploitation", 'title' => "Exploitation / Sex Trade " ]);
        EventCategory::create([ 'category' => "Services", 'title' => "Services" ]);
    }
}
