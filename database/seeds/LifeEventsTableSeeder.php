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
			/*
  			[
  				'event' => "Parent/adult: Swear at/insult/putdown/humiliate",
  				'prompt' => "Swear at you, insult you, put you down, or humiliate you?",
  				'field_name' => "parent_or_adult_often[]",
					'timeline' => true
  			],
  			[
  				'event' => "Parent/adult: Affraid physically hurt",
  				'prompt' => "Act in a way that made you afraid that you might be physically hurt?",
  				'field_name' => "parent_or_adult_often[]",
					'timeline' => true
  			],
  			[
  				'event' => "Parent/adult: Push/slap/grab/throw something",
  				'prompt' => "Push, grab, slap, or throw something at you?",
  				'field_name' => "parent_or_adult_often[]"
  			],
  			[
  				'event' => "Parent/adult: Hit so hard marks or injured",
  				'prompt' => "<strong>Ever</strong> hit you so hard that you had marks or were injured?",
  				'field_name' => "parent_or_adult_often[]"
  			],
			*/
   			[
  				'event' => "Experienced verbal abuse",
  				'prompt' => "Experienced verbal abuse (time where a parent or other adult swore at, insulted, or humiliated you, or acted in a way that made you afraid you might be physically hurt)",
  				'field_name' => $field_name,
  				'field_id' => "DO NOT DISPLAY",
		      'timeline' => true
  			],
   			[
  				'event' => "Experienced physical abuse",
  				'prompt' => "Experienced physical abuse (including pushing, grabbing, slapping, hitting, or throwing something at you)",
  				'field_name' => $field_name,
  				'field_id' => "DO NOT DISPLAY",
		      'timeline' => true
  			],
   			[
  				'event' => "Experienced sexual abuse",
  				'prompt' => "Experienced sexual abuse (time where an adult or someone 5 years older than you touched, fondled, tried to or actually had sexual contact with you)",
  				'field_name' => $field_name,
  				'field_id' => "DO NOT DISPLAY",
		      'timeline' => true
  			],
   			[
  				'event' => "Witnessed violence at home",
  				'prompt' => "Witnessed violence at home",
  				'field_name' => $field_name,
  				'field_id' => "DO NOT DISPLAY",
		      'timeline' => true
  			],

				/* Checklist items - Growing up, during first 18 years of life */
		
   			[
  				'event' => "A parent, guardian, or caregiver got married",
  				'prompt' => "A parent, guardian, or caregiver got married",
  				'field_name' => $field_name,
		      'timeline' => false
  			],
   			[
  				'event' => "Parents were ever separated or divorced",
  				'prompt' => "Your parents were ever separated or divorced",
  				'field_name' => $field_name,
		      'timeline' => false
  			],
   			[
  				'event' => "Lived with anyone who was a problem drinker or alcoholic or who used street drugs",
  				'prompt' => "Lived with anyone who was a problem drinker or alcoholic or who used street drugs",
  				'field_name' => $field_name,
		      'timeline' => false
  			],
   			[
  				'event' => "A household member was depressed or mentally ill or did a household member attempt suicide",
  				'prompt' => "A household member was depressed or mentally ill or did a household member attempt suicide",
  				'field_name' => $field_name,
		      'timeline' => true
  			],
   			[
  				'event' => "Household member in jail or prison",
  				'prompt' => "A household member was in jail or prison",
  				'field_name' => $field_name,
		      'timeline' => true
  			],
				[
  				'event' => "Someone else came to live with you (bf or gf of parent, aunt, uncle, etc.)",
  				'prompt' => "Someone else came to live with you (bf or gf of parent, aunt, uncle, etc.)",
  				'field_name' => $field_name,
          'timeline' => false
  			],
   			[
  				'event' => "Moved around a lot",
  				'prompt' => "You moved around a lot",
  				'field_name' => $field_name,
          'timeline' => false
  			],
   			[
  				'event' => "Homeless",
  				'prompt' => "You experienced homelessness",
  				'field_name' => $field_name,
          'timeline' => true
  			],
   			[
  				'event' => "Ran away",
  				'prompt' => "You ran away",
  				'field_name' => $field_name,
          'timeline' => true
  			],
   			[
  				'event' => "Family received public assistance (food stamps, disability, unemployment, etc.)",
  				'prompt' => "Your family received public assistance (food stamps, disability, unemployment, etc.)",
  				'field_name' => $field_name,
          'timeline' => false
  			],
   			[
  				'event' => "Family could not afford heat or water, other basic utilities",
  				'prompt' => "Your family could not afford heat or water (or other basic utilities)",
  				'field_name' => $field_name,
		      'timeline' => true
  			],
   			[
  				'event' => "Family poverty",
  				'prompt' => "Your family experienced poverty",
  				'field_name' => $field_name,
		      'timeline' => false
  			],
   			[
  				'event' => "Used drugs/alcohol",
  				'prompt' => "You used to drugs or alcohol",
  				'field_name' => $field_name,
		      'timeline' => false
  			],
   			[
  				'event' => "Addicted to drugs/alcohol",
  				'prompt' => "You were addicted to drugs or alcohol",
  				'field_name' => $field_name,
		      'timeline' => true
  			],
   			[
  				'event' => "Felt like life was threatened",
  				'prompt' => "You felt like your life was threatened",
  				'field_name' => $field_name,
		      'timeline' => false
  			],
   			[
  				'event' => "Foster care",
  				'prompt' => "Lived in foster care",
  				'field_name' => $field_name,
		      'timeline' => true
  			]
			/*
 			[
  				'event' => "Event",
  				'prompt' => "Prompt",
  				'field_name' => $field_name
  			],
			*/
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
              'field_name' => $field_name,
              'timeline' => true
            ],
            [
              'event' => "Graduated high school",
              'prompt' => "Graduate from high school",
              'field_name' => $field_name,
              'timeline' => true
            ],
            [
              'event' => "Got GED",
              'prompt' => "Get a GED",
              'field_name' => $field_name,
              'timeline' => true
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
              'field_name' => $field_name,
              'timeline' => true
            ],
            [
              'event' => "Left school for a period of time",
              'prompt' => "Ever leave school for a period of time",
              'field_name' => $field_name,
              'timeline' => true
            ],
            [
              'event' => "Abused by teacher/someone else",
              'prompt' => "Experienced abuse by a teacher (or someone else at school)",
              'field_name' => $field_name,
              'timeline' => true
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
  				'event' => "Applied for PT/FT job",
  				'prompt' => "Applied for a part-time or full-time job?",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Had trouble finding job",
  				'prompt' => "Had trouble finding a job",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Been employed PT/FT",
  				'prompt' => "Been employed part-time or full-time",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Been fired",
  				'prompt' => "Been fired from a job",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Quit job",
  				'prompt' => "Quit a job",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Live on own/supporting self+others",
  				'prompt' => "Lived on your own, supporting yourself and/or others",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Had trouble paying bills",
  				'prompt' => "Had trouble paying regular bills (utilities, phone, car, rent, etc.)",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Missed/late rent",
  				'prompt' => "Missed or late rent payment",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Trouble paying medical bills",
  				'prompt' => "Experienced trouble paying medical bills",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Trouble finding housing",
  				'prompt' => "Had trouble finding housing",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Made above minimum wage",
  				'prompt' => "Made above minimum wage",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Received public assistance",
  				'prompt' => "Received public assistance (food stamps, disability, welfare, etc.)",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Experienced poverty as adult",
  				'prompt' => "Experienced poverty as an adult",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Bought a house",
  				'prompt' => "Bought a house",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Evicted",
  				'prompt' => "Ever been evicted",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Lived with significant other for financial reasons",
  				'prompt' => "Lived with a significant other for financial reasons",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Lived with family member for financial reasons",
  				'prompt' => "Lived with a family member for financial reasons",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Financially supported by significant other",
  				'prompt' => "Been financially supported by a significant other",
  				'field_name' => $field_name,
          'timeline' => true
  			]
  		]);
    }

    private function seedSocialRelationshipsLifeEvents()
    {
      $category = EventCategory::where('category', 'Social Relationships')->first();
  		$field_name = "social_relationships_events[]";

  		$category->life_events()->createMany([
  			[
  				'event' => "Dated",
  				'prompt' => "Dated",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Married",
  				'prompt' => "Been married",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Divorced",
  				'prompt' => "Been divorced",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Pregnant",
  				'prompt' => "Been pregnant",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Had child",
  				'prompt' => "Had a child (by birth or adoption)",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Had healthy relationship",
  				'prompt' => "Had a healthy romantic relationship",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Violence by partner",
  				'prompt' => "Experienced violence by a partner",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Emotional abuse by partner",
  				'prompt' => "Experienced emotional abuse by a partner",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Death of spouse",
  				'prompt' => "Experienced the death of a spouse",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Lost custody of child",
  				'prompt' => "Lost custody of a child",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Regained custody of child",
  				'prompt' => "Regained custody of a child",
  				'field_name' => $field_name,
          'timeline' => true
  			],
  			[
  				'event' => "Lost important friendship",
  				'prompt' => "Lost an important friendship",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Struggled trusting people",
  				'prompt' => "Struggled with trusting people",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Struggled finding healthy relationships",
  				'prompt' => "Struggled with finding healthy relationships",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Struggled having relationships with family as adult",
  				'prompt' => "Struggled having relationships with your family as an adult",
  				'field_name' => $field_name
  			],
  			[
  				'event' => "Tried to reconnect strained relationship",
  				'prompt' => "Tried to reconnect with anyone as an adult when that was a strained relationship in the past",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Had positive support w/unconditional trust",
  				'prompt' => "Had positive support in your life that you trusted unconditionally?",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Got involved community orgs",
  				'prompt' => "Gotten involved with any community organizations",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Started attending religious services",
  				'prompt' => "Started attending religious services/events as an adult",
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
  				'event' => "Arrested",
  				'prompt' => "Ever been arrested",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Detained but not charged",
  				'prompt' => "Ever been detained but not charged",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Convicted/found guilty",
  				'prompt' => "Ever been convicted/found guilty",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Incarcerated",
  				'prompt' => "Ever been incarcerated (been to prison or jail)",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Reported crime to police",
  				'prompt' => "Ever reported a crime to the police",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Negative interaction w/police",
  				'prompt' => "Ever had a negative interaction with a police officer",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Positive interaction w/police",
  				'prompt' => "Ever had a positive interaction with a police officer",
  				'field_name' => $field_name
  			],
        [
  				'event' => "Solicited sexually by police officer",
  				'prompt' => "Ever been solicited/asked to do anything sexual by a police officer",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Criminal record",
  				'prompt' => "Had a criminal record",
  				'field_name' => $field_name
  			]
  		]);
    }

    private function seedExploitationLifeEvents()
    {
      $category = EventCategory::where('category', 'Exploitation')->first();
      $field_name_1 = "exploitation_events_group_1[]";
      $field_name_2 = "exploitation_events_group_2[]";

      $category->life_events()->createMany([
        [
          'event' => "Asked by family member to exchange sex",
          'prompt' => "Been asked by a family member to exchange sexual favors for money, drugs, or other compensation",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Had romantic relationship w/someone who sold you for sex",
          'prompt' => "Had a romantic relationship with someone who sold you for sex?",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Experienced violence by pimp",
          'prompt' => "Experienced violence by a pimp",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Experienced violence by client",
          'prompt' => "Experienced violence by a client",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Been stalked",
          'prompt' => "Ever been stalked",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Felt life was threatened",
          'prompt' => "Ever feel like your life was threatened",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Tried to leave sex trade",
          'prompt' => "Ever tried to leave the sex trade",
          'field_name' => $field_name_1,
          'timeline' => true
        ],
        [
          'event' => "Used substances to cope",
          'prompt' => "Used substances (drugs, alcohol) to cope",
          'field_name' => $field_name_2,
          'timeline' => true
        ],
        [
          'event' => "Hospitalized for drug/alcohol use",
          'prompt' => "Ever been hospitalized for drug or alcohol use",
          'field_name' => $field_name_2,
          'timeline' => true
        ],
        [
  				'event' => "Struggled w/depression/anxiety/PTSD/mental health",
  				'prompt' => "Struggled with depression, anxiety, post-traumatic stress disorder or other mental health issues",
  				'field_name' => $field_name_2,
          'timeline' => true
  			]
      ]);
    }

    private function seedServicesLifeEvents()
    {
      $category = EventCategory::where('category', 'Services')->first();
  		$field_name = "services_events[]";

  		$category->life_events()->createMany([
  			[
  				'event' => "Substance use",
  				'prompt' => "Substance use",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Mental health",
  				'prompt' => "Mental health",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Health care clinic",
  				'prompt' => "Health care clinic",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Emergency room",
  				'prompt' => "Emergency room",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Domestic violence",
  				'prompt' => "Domestic violence services",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Sexual assault",
  				'prompt' => "Sexual assault services",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Legal",
  				'prompt' => "Legal services",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Employment",
  				'prompt' => "Employment services",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Family",
  				'prompt' => "Family services (child care, custody, etc.)",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Religious",
  				'prompt' => "Religious-based services",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Housing",
  				'prompt' => "Housing services",
  				'field_name' => $field_name,
          'timeline' => true
  			],
        [
  				'event' => "Agency to help exit sex trade",
  				'prompt' => "Agency to help exit sex trade",
  				'field_name' => $field_name,
          'timeline' => true
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
    				'field_name' => $field_name,
            'timeline' => true
    			],
    		]);
    	}
    */

}
