<?php

namespace Pims\Api;

interface Endpoint {
	
	const CATEGORIES = '/categories';
	
	const CHANNELS = '/channels';
	
	const EVENTS 						= '/events';
	const EVENTS_CAPACITIES 			= '/events/:event_id/capacities';
	const EVENTS_CATEGORIES 			= '/events/:event_id/categories';
	const EVENTS_CHANNELS 				= '/events/:event_id/channels';
	const EVENTS_PROMOTIONS 			= '/events/:event_id/promotions';
	const EVENTS_TICKETCOUNTS			= '/events/:event_id/ticket-counts';
	const EVENTS_TICKETCOUNTS_DETAILED	= '/events/:event_id/ticket-counts/detailed';
	
	const PRICERANGES = '/price-ranges';
	
	const PROMOTIONS = '/promotions';
	
	const SERIES 			= '/series';
	const SERIES_EVENTS		= '/series/:series_id/events';
	const SERIES_PROMOTIONS	= '/series/:series_id/promotions';
	
	const VENUES 		= '/venues';
	const VENUES_EVENTS	= '/venues/:venue_id/events';
}