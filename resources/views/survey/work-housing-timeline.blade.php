@extends('layouts.survey')

@section('title', 'Work/Housing - Timeline')

@section('content')

<h2>TIMELINE OF WORK/HOUSING EVENTS</h2>
<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
<hr />

<form method="post" action="{{ route('survey.work-housing-timeline') }}">
		{{ csrf_field() }}
		<div class="alert alert-primary border border-primary">
			@each('partials.life-event-timeline', $timelineEvents, 'timelineEvent')
		</div>
<!--
	<fieldset>
			<legend>Had trouble finding a job</legend>
			<div class="form-row">
					<div class="input-group col-3">
							<span class="input-group-addon">
									<label class="form-check-label">
											<input class="form-check-input" type="radio" name="timeframe_trouble_finding_job" id="timeframeAge" value="Age"> Age
									</label>
							</span>
							<input type="text" class="form-control" name="age_trouble_finding_job" />
					</div>
					<div class="input-group col-3">
							<span class="input-group-addon">
									<label class="form-check-label">
											<input class="form-check-input" type="radio" name="timeframe_trouble_finding_job" id="timeframeYear" value="Year"> Year
									</label>
							</span>
							<input type="text" class="form-control" name="year_trouble_finding_job" />
					</div>
					<div class="input-group col-6">
							<span class="input-group-addon">
									<label class="form-check-label">
											<input class="form-check-input" type="radio" name="timeframe_trouble_finding_job" id="timeframeRange" value="Range"> Range
									</label>
							</span>
							<span class="input-group-addon">from:</span>
							<input type="text" class="form-control" name="range_from_trouble_finding_job" />
							<span class="input-group-addon">to:</span>
							<input type="text" class="form-control" name="range_to_trouble_finding_job" />
					</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
				<legend>Been employed 40+ hours/week</legend>
				<div class="form-row">
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_employed40hours_week" id="timeframeAge" value="Age"> Age
										</label>
								</span>
								<input type="text" class="form-control" name="age_employed40hours_week" />
						</div>
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_employed40hours_week" id="timeframeYear" value="Year"> Year
										</label>
								</span>
								<input type="text" class="form-control" name="year_employed40hours_week" />
						</div>
						<div class="input-group col-6">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_employed40hours_week" id="timeframeRange" value="Range"> Range
										</label>
								</span>
								<span class="input-group-addon">from:</span>
								<input type="text" class="form-control" name="range_from_employed40hours_week" />
								<span class="input-group-addon">to:</span>
								<input type="text" class="form-control" name="range_to_employed40hours_week" />
						</div>
				</div>
			</fieldset>

			<hr />

		<fieldset>
			<legend>Been fired from a job</legend>
			<div class="form-row">
					<div class="input-group col-3">
							<span class="input-group-addon">
									<label class="form-check-label">
											<input class="form-check-input" type="radio" name="timeframe_fired_from_job" id="timeframeAge" value="Age"> Age
									</label>
							</span>
							<input type="text" class="form-control" name="age_fired_from_job" />
					</div>
					<div class="input-group col-3">
							<span class="input-group-addon">
									<label class="form-check-label">
											<input class="form-check-input" type="radio" name="timeframe_fired_from_job" id="timeframeYear" value="Year"> Year
									</label>
							</span>
							<input type="text" class="form-control" name="year_fired_from_job" />
					</div>
					<div class="input-group col-6">
							<span class="input-group-addon">
									<label class="form-check-label">
											<input class="form-check-input" type="radio" name="timeframe_fired_from_job" id="timeframeRange" value="Range"> Range
									</label>
							</span>
							<span class="input-group-addon">from:</span>
							<input type="text" class="form-control" name="range_from_fired_from_job" />
							<span class="input-group-addon">to:</span>
							<input type="text" class="form-control" name="range_to_fired_from_job" />
					</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
				<legend>Quit a job</legend>
				<div class="form-row">
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_quit_job" id="timeframeAge" value="Age"> Age
										</label>
								</span>
								<input type="text" class="form-control" name="age_quit_job" />
						</div>
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_quit_job" id="timeframeYear" value="Year"> Year
										</label>
								</span>
								<input type="text" class="form-control" name="year_quit_job" />
						</div>
						<div class="input-group col-6">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_quit_job" id="timeframeRange" value="Range"> Range
										</label>
								</span>
								<span class="input-group-addon">from:</span>
								<input type="text" class="form-control" name="range_from_quit_job" />
								<span class="input-group-addon">to:</span>
								<input type="text" class="form-control" name="range_to_quit_job" />
						</div>
				</div>
			</fieldset>

			<hr />

			<fieldset>
					<legend>Received public assistance (food stamps, disability, welfare, etc.)</legend>
					<div class="form-row">
							<div class="input-group col-3">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_received_public_assistance" id="timeframeAge" value="Age"> Age
											</label>
									</span>
									<input type="text" class="form-control" name="age_received_public_assistance" />
							</div>
							<div class="input-group col-3">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_received_public_assistance" id="timeframeYear" value="Year"> Year
											</label>
									</span>
									<input type="text" class="form-control" name="year_received_public_assistance" />
							</div>
							<div class="input-group col-6">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_received_public_assistance" id="timeframeRange" value="Range"> Range
											</label>
									</span>
									<span class="input-group-addon">from:</span>
									<input type="text" class="form-control" name="range_from_received_public_assistance" />
									<span class="input-group-addon">to:</span>
									<input type="text" class="form-control" name="range_to_received_public_assistance" />
							</div>
					</div>
				</fieldset>

				<hr />
		<fieldset>
				<legend>Experienced poverty as an adult</legend>
				<div class="form-row">
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_poverty_as_adult" id="timeframeAge" value="Age"> Age
										</label>
								</span>
								<input type="text" class="form-control" name="age_poverty_as_adult" />
						</div>
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_poverty_as_adult" id="timeframeYear" value="Year"> Year
										</label>
								</span>
								<input type="text" class="form-control" name="year_poverty_as_adult" />
						</div>
						<div class="input-group col-6">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_poverty_as_adult" id="timeframeRange" value="Range"> Range
										</label>
								</span>
								<span class="input-group-addon">from:</span>
								<input type="text" class="form-control" name="range_from_poverty_as_adult" />
								<span class="input-group-addon">to:</span>
								<input type="text" class="form-control" name="range_to_poverty_as_adult" />
						</div>
				</div>
			</fieldset>

			<hr />
			<fieldset>
					<legend>Bought a house</legend>
					<div class="form-row">
							<div class="input-group col-3">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_bought_house" id="timeframeAge" value="Age"> Age
											</label>
									</span>
									<input type="text" class="form-control" name="age_bought_house" />
							</div>
							<div class="input-group col-3">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_bought_house" id="timeframeYear" value="Year"> Year
											</label>
									</span>
									<input type="text" class="form-control" name="year_bought_house" />
							</div>
							<div class="input-group col-6">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_bought_house" id="timeframeRange" value="Range"> Range
											</label>
									</span>
									<span class="input-group-addon">from:</span>
									<input type="text" class="form-control" name="range_from_bought_house" />
									<span class="input-group-addon">to:</span>
									<input type="text" class="form-control" name="range_to_bought_house" />
							</div>
					</div>
				</fieldset>

			<hr />

		<fieldset>
				<legend>Ever been evicted</legend>
				<div class="form-row">
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_evicted" id="timeframeAge" value="Age"> Age
										</label>
								</span>
								<input type="text" class="form-control" name="age_evicted" />
						</div>
						<div class="input-group col-3">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_evicted" id="timeframeYear" value="Year"> Year
										</label>
								</span>
								<input type="text" class="form-control" name="year_evicted" />
						</div>
						<div class="input-group col-6">
								<span class="input-group-addon">
										<label class="form-check-label">
												<input class="form-check-input" type="radio" name="timeframe_evicted" id="timeframeRange" value="Range"> Range
										</label>
								</span>
								<span class="input-group-addon">from:</span>
								<input type="text" class="form-control" name="range_from_evicted" />
								<span class="input-group-addon">to:</span>
								<input type="text" class="form-control" name="range_to_evicted" />
						</div>
				</div>
			</fieldset>

			<hr />

			<fieldset>
					<legend>Lived with a significant other for primarily financial reasons</legend>
					<div class="form-row">
							<div class="input-group col-3">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_lived_with_significant_other_financial_reasons" id="timeframeAge" value="Age"> Age
											</label>
									</span>
									<input type="text" class="form-control" name="age_lived_with_significant_other_financial_reasons" />
							</div>
							<div class="input-group col-3">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_lived_with_significant_other_financial_reasons" id="timeframeYear" value="Year"> Year
											</label>
									</span>
									<input type="text" class="form-control" name="year_lived_with_significant_other_financial_reasons" />
							</div>
							<div class="input-group col-6">
									<span class="input-group-addon">
											<label class="form-check-label">
													<input class="form-check-input" type="radio" name="timeframe_lived_with_significant_other_financial_reasons" id="timeframeRange" value="Range"> Range
											</label>
									</span>
									<span class="input-group-addon">from:</span>
									<input type="text" class="form-control" name="range_from_lived_with_significant_other_financial_reasons" />
									<span class="input-group-addon">to:</span>
									<input type="text" class="form-control" name="range_to_lived_with_significant_other_financial_reasons" />
							</div>
					</div>
				</fieldset>

				<hr />

				<fieldset>
						<legend>Lived with a family member for primarily financial reasons</legend>
						<div class="form-row">
								<div class="input-group col-3">
										<span class="input-group-addon">
												<label class="form-check-label">
														<input class="form-check-input" type="radio" name="timeframe_lived_with_family_financial_reasons" id="timeframeAge" value="Age"> Age
												</label>
										</span>
										<input type="text" class="form-control" name="age_lived_with_family_financial_reasons" />
								</div>
								<div class="input-group col-3">
										<span class="input-group-addon">
												<label class="form-check-label">
														<input class="form-check-input" type="radio" name="timeframe_lived_with_family_financial_reasons" id="timeframeYear" value="Year"> Year
												</label>
										</span>
										<input type="text" class="form-control" name="year_lived_with_family_financial_reasons" />
								</div>
								<div class="input-group col-6">
										<span class="input-group-addon">
												<label class="form-check-label">
														<input class="form-check-input" type="radio" name="timeframe_lived_with_family_financial_reasons" id="timeframeRange" value="Range"> Range
												</label>
										</span>
										<span class="input-group-addon">from:</span>
										<input type="text" class="form-control" name="range_from_lived_with_family_financial_reasons" />
										<span class="input-group-addon">to:</span>
										<input type="text" class="form-control" name="range_to_lived_with_family_financial_reasons" />
								</div>
						</div>
					</fieldset>

					<hr />

				<fieldset>
						<legend>Financially supported by a trafficker</legend>
						<div class="form-row">
								<div class="input-group col-3">
										<span class="input-group-addon">
												<label class="form-check-label">
														<input class="form-check-input" type="radio" name="timeframe_supported_by_trafficker" id="timeframeAge" value="Age"> Age
												</label>
										</span>
										<input type="text" class="form-control" name="age_supported_by_trafficker" />
								</div>
								<div class="input-group col-3">
										<span class="input-group-addon">
												<label class="form-check-label">
														<input class="form-check-input" type="radio" name="timeframe_supported_by_trafficker" id="timeframeYear" value="Year"> Year
												</label>
										</span>
										<input type="text" class="form-control" name="year_supported_by_trafficker" />
								</div>
								<div class="input-group col-6">
										<span class="input-group-addon">
												<label class="form-check-label">
														<input class="form-check-input" type="radio" name="timeframe_supported_by_trafficker" id="timeframeRange" value="Range"> Range
												</label>
										</span>
										<span class="input-group-addon">from:</span>
										<input type="text" class="form-control" name="range_from_supported_by_trafficker" />
										<span class="input-group-addon">to:</span>
										<input type="text" class="form-control" name="range_to_supported_by_trafficker" />
								</div>
						</div>
					</fieldset>

				<hr />
-->
			<div class="row">
				<button class="btn btn-primary mx-auto" type="submit">Save and Continue to Timeline &rarr;</button>
			</div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '30'])
@endsection
