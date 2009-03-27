<?php
	/**
	* Test TV_Show
	*/
	
	class Test_TV_Show extends UnitTestCase {

		private $showId = 73545;
		private $season = 2;
		private $episode = 1;
		
		public function testTvShow() {
			$genres = array('Science-Fiction');
			$actors = array("Edward James Olmos",
                        "Grace Park",
                        "James Callis",
                        "Jamie Bamber",
                        "Kandyse McClure",
                        "Kate Vernon",
                        "Katee Sackhoff",
                        "Mary McDonnell",
                        "Michael Hogan",
                        "Michael Trucco",
                        "Tricia Helfer");
			$overview = 'In a distant part of the universe, a civilization of humans live on planets known as the Twelve Colonies. In the past, the Colonies have been at war with a cybernetic race known as the Cylons. 40 years after the first war the Cylons launch a devastating attack on the Colonies. The only military ship that survived the attack takes up the task of leading a small fugitive fleet of survivors into space in search of a fabled refuge known as Earth.';
		
			$show = TV_Shows::findById($this->showId);
		    
			$this->assertTrue($show->seriesName == 'Battlestar Galactica (2003)');
			$this->assertTrue($show->status == 'Ended');
			$this->assertTrue($show->firstAired == 1070265600);
			$this->assertTrue($show->network == 'SciFi');
			$this->assertTrue($show->runtime == '60');
			$this->assertTrue(count(array_diff($show->genres, $genres)) == 0);
			$this->assertTrue(count(array_diff($show->actors, $actors)) == 0);
			$this->assertTrue($show->overview == $overview);
			$this->assertTrue($show->dayOfWeek = 'Sunday');
			$this->assertTrue($show->airTime == '10:00 PM');
			$this->assertTrue($show->rating >= 0 && $show->rating <= 10);
			$this->assertTrue($show->imdbId == 'tt0407362');
			$this->assertTrue($show->zap2ItId == 'SH710749');		
		}
	}
?>