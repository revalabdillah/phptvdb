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
			$actors = array('Tricia Helfer','Jamie Bamber','Katee Sackhoff','Grace Park','Mary McDonnell','Jim Callis','Edward James Olmos');
			$overview = 'Ronald D. Moore, producer and writer of the first season of Carnivale, writer for shows such as Star Trek: The Next Generation, and Star Trek: Deep Space Nine boldly re-imagines this classic tale of good versus evil. Gone is the technobabble and mindless space battles of the shows earlier namesake. This is a program that introduces many new elements to the Galactica Tale. The Cylons look like us now, they could be anywhere, and they seem to have developed a monotheistic religion that is in contrast to the human polytheistic religion. The Cylons begin by wiping out the twelve colonies and sending the survivors all 47,000 (approx) of them on a desperate search for the fabled 13th colony. Earth.';
			
			
			
			$show = TV_Shows::findById($this->showId);
		    
			$this->assertTrue($show->seriesName == 'Battlestar Galactica (2003)');
			$this->assertTrue($show->status == 'Continuing');
			$this->assertTrue($show->firstAired == 1070265600);
			$this->assertTrue($show->network == 'SciFi');
			$this->assertTrue($show->runtime == '60');
			$this->assertTrue(count(array_diff($show->genres, $genres)) == 0);
			$this->assertTrue(count(array_diff($show->actors, $actors)) == 0);
			$this->assertTrue($show->overview == $overview);
			$this->assertTrue($show->daysOfWeek = 'Sunday');
			$this->assertTrue($show->airTime == '10:00 PM');
			$this->assertTrue($show->rating >= 0 && $show->rating <= 10);
			$this->assertTrue($show->imdbId == 'tt0407362');
			$this->assertTrue($show->zap2ItId == 'SH710749');		
		}
	}
?>