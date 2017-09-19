<?php

use Illuminate\Database\Seeder;
use App\EventCategory;

class LifeEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed life events for each category
    		$this->seedFamilyBackgroundLifeEvents();
    		$this->seedEducationLifeEvents();
        $this->seedWorkHousingLifeEvents();
        $this->seedSocialRelationshipsLifeEvents();
        $this->seedCriminalJusticeLifeEvents();
        $this->seedExploitationLifeEvents();
        $this->seedServicesLifeEvents();
    }

  	private function seedFamilyBackgroundLifeEvents()
  	{
  		$category = EventCategory::where('category', 'Family Background')->first();
  		$field_name = "family_background_events[]";

  		$category->life_events()->createMany([
  			// Did a parent or other adult in the household <strong>often</strong>:
  			[
  				'event' => "Parent/adult: Swear at/insult/putdown/humiliate",
  				'prompt' => "Did a parent or other adult in the household <strong>often</strong> swear at you, insult you, put you down, or humiliate you?",
  				'field_name' => "parent_or_adult_often[]"
  			],
  			[
  				'event' => "Parent/adult: Affraid physically hurt",
  				'prompt' => "Did a parent or other adult in the household <strong>often</strong> act in a way that made you afraid that you might be physically hurt?",
  				'field_name' => "parent_or_adult_often[]"
  			],
  			[
  				'event' => "Parent/adult: Push/slap/grab/throw something",
  				'prompt' => "Did a parent or other adult in the household <strong>often</strong> push, grab, slap, or throw something at you?",
  				'field_name' => "parent_or_adult_often[]"
  			],
  			[
  				'event' => "Parent/adult: Hit so hard marks or injured",
  				'prompt' => "Did a parent or other adult in the household <strong>ever</strong> hit you so hard that you had marks or were injured?",
  				'field_name' => "parent_or_adult_often[]"
  			],
  			[
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			],
  		]);
  	}

  	private function seedEducationLifeEvents()
  	{
  		$category = EventCategory::where('category', 'Education')->first();
  		$field_name = "education_events[]";

          $category->life_events()->createMany([
            [
              'event' => "Attended Pre-K",
              'prompt' => "Attend Pre-K",
              'field_name' => $field_name
            ],
            [
              'event' => "Got award",
              'prompt' => "Get an award at school",
              'field_name' => $field_name
            ],
            [
              'event' => "Honor roll",
              'prompt' => "Ever make the honor roll or high honor roll (got all A's and B's, or all A's)",
              'field_name' => $field_name
            ],
            [
              'event' => "Source of success/fulfillment",
              'prompt' => "Ever see school as a source of success and fulfillment",
              'field_name' => $field_name
            ],
            [
              'event' => "Source of failure/disappointment",
              'prompt' => "Ever see school as a source of failure and disappointment",
              'field_name' => $field_name
            ],
            [
              'event' => "Liked teacher",
              'prompt' => "Have a teacher you liked and connected to",
              'field_name' => $field_name
            ],
            [
              'event' => "Had difficult teacher",
              'prompt' => "Have a teacher that made things difficult for you",
              'field_name' => $field_name
            ],
            [
              'event' => "Repeated grade",
              'prompt' => "Have to repeat a grade",
              'field_name' => $field_name
            ],
            [
              'event' => "Graduated high school",
              'prompt' => "Graduate from high school",
              'field_name' => $field_name
            ],
            [
              'event' => "Got GED",
              'prompt' => "Get a GED",
              'field_name' => $field_name
            ],
            [
              'event' => "Felt always in trouble with teachers",
              'prompt' => "Felt like you were always getting into trouble with teachers/administrators",
              'field_name' => $field_name
            ],
            [
              'event' => "Felt treated unfairly",
              'prompt' => "Felt like you were treated unfairly in school",
              'field_name' => $field_name
            ],
            [
              'event' => "Felt school was a struggle/always falling behind",
              'prompt' => "Feel like school was a struggle, always falling behind",
              'field_name' => $field_name
            ],
            [
              'event' => "Skip school regularly",
              'prompt' => "Skip school regularly at any period of time",
              'field_name' => $field_name
            ],
            [
              'event' => "Left school for a period of time",
              'prompt' => "Ever leave school for a period of time",
              'field_name' => $field_name
            ],
            [
              'event' => "Abused by teacher/someone else",
              'prompt' => "Experienced abuse by a teacher (or someone else at school)",
              'field_name' => $field_name
            ],
            [
              'event' => "Applied to college",
              'prompt' => "Apply to college",
              'field_name' => $field_name
            ],
            [
              'event' => "Went to college",
              'prompt' => "Go to college",
              'field_name' => $field_name
            ],
            [
              'event' => "Accepted to college but did not attend",
              'prompt' => "Get into a college, but did not attend",
              'field_name' => $field_name
            ]
          ]);
  	}

    private function seedWorkHousingLifeEvents()
    {
      $category = EventCategory::where('category', 'Work Housing')->first();
  		$field_name = "work_housing_events[]";

  		$category->life_events()->createMany([
  			[
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			]
  		]);
    }

    private function seedSocialRelationshipsLifeEvents()
    {
      $category = EventCategory::where('category', 'Social Relationships')->first();
  		$field_name = "social_relationships_events[]";

  		$category->life_events()->createMany([
  			[
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			]
  		]);
    }

    private function seedCriminalJusticeLifeEvents()
    {
      $category = EventCategory::where('category', 'Criminal Justice')->first();
  		$field_name = "criminal_justice_events[]";

  		$category->life_events()->createMany([
  			[
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			]
  		]);
    }

    private function seedExploitationLifeEvents()
    {
      $category = EventCategory::where('category', 'Exploitation')->first();
      $field_name = "exploitation_events[]";

      $category->life_events()->createMany([
        [
          'event' => "Event",
          'prompt' => "Prompt",
          'field_name' => $field_name
        ],
        [
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			]
      ]);
    }

    private function seedServicesLifeEvents()
    {
      $category = EventCategory::where('category', 'Services')->first();
  		$field_name = "services_events[]";

  		$category->life_events()->createMany([
  			[
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			]
  		]);
    }

    /*
    	public function seedCategoryLifeEvents()
    	{
    		$category = EventCategory::where('category', 'Category')->first();
    		$field_name = "category_events[]";

    		$category->life_events()->createMany([
    			[
    				'event' => "Event",
    				'prompt' => "Prompt",
    				'field_name' => $field_name
    			],
    		]);
    	}
    */

}
