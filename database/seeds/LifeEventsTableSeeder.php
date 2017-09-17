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
        //
        $category = EventCategory::where('category', 'Education')->first();

        $category->life_events()->createMany([
          [
            'event' => "Attended Pre-K",
            'prompt' => "Attend Pre-K",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Got award",
            'prompt' => "Get an award at school",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Honor roll",
            'prompt' => "Ever make the honor roll or high honor roll (got all A's and B's, or all A's)",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Source of success/fulfillment",
            'prompt' => "Ever see school as a source of success and fulfillment",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Source of failure/disappointment",
            'prompt' => "Ever see school as a source of failure and disappointment",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Liked teacher",
            'prompt' => "Have a teacher you liked and connected to",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Had difficult teacher",
            'prompt' => "Have a teacher that made things difficult for you",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Repeated grade",
            'prompt' => "Have to repeat a grade",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Graduated high school",
            'prompt' => "Graduate from high school",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Got GED",
            'prompt' => "Get a GED",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Felt always in trouble with teachers",
            'prompt' => "Felt like you were always getting into trouble with teachers/administrators",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Felt treated unfairly",
            'prompt' => "Felt like you were treated unfairly in school",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Felt school was a struggle/always falling behind",
            'prompt' => "Feel like school was a struggle, always falling behind",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Skip school regularly",
            'prompt' => "Skip school regularly at any period of time",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Left school for a period of time",
            'prompt' => "Ever leave school for a period of time",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Abused by teacher/someone else",
            'prompt' => "Experienced abuse by a teacher (or someone else at school)",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Applied to college",
            'prompt' => "Apply to college",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Went to college",
            'prompt' => "Go to college",
            'field_name' => "education_events[]"
          ],
          [
            'event' => "Accepted to college but did not attend",
            'prompt' => "Get into a college, but did not attend",
            'field_name' => "education_events[]"
          ]
        ]);
    }
}
