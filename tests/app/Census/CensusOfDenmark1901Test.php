<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2016 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace Fisharebest\Webtrees\Census;

/**
 * Test harness for the class CensusOfDenmark1901
 */
class CensusOfDenmark1901Test extends \PHPUnit_Framework_TestCase {
	/**
	 * Test the census place and date
	 *
	 * @covers Fisharebest\Webtrees\Census\CensusOfDenmark1901
	 */
	public function testPlaceAndDate() {
		$census = new CensusOfDenmark1901;

		$this->assertSame('Danmark', $census->censusPlace());
		$this->assertSame('01 FEB 1901', $census->censusDate());
	}

	/**
	 * Test the census columns
	 *
	 * @covers Fisharebest\Webtrees\Census\CensusOfDenmark1901
	 * @covers Fisharebest\Webtrees\Census\AbstractCensusColumn
	 */
	public function testColumns() {
		$census  = new CensusOfDenmark1901;
		$columns = $census->columns();

		$this->assertCount(17, $columns);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnFullName', $columns[0]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnSexMK', $columns[1]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnBirthDaySlashMonthYear', $columns[2]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnConditionDanish', $columns[3]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnReligion', $columns[4]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnBirthPlace', $columns[5]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[6]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[7]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnRelationToHead', $columns[8]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnOccupation', $columns[9]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[10]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[11]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[12]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[13]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[14]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[15]);
		$this->assertInstanceOf('Fisharebest\Webtrees\Census\CensusColumnNull', $columns[16]);

		$this->assertSame('Navn', $columns[0]->abbreviation());
		$this->assertSame('Køn', $columns[1]->abbreviation());
		$this->assertSame('Fødselsdag', $columns[2]->abbreviation());
		$this->assertSame('Civilstand', $columns[3]->abbreviation());
		$this->assertSame('Trossamfund', $columns[4]->abbreviation());
		$this->assertSame('Fødested', $columns[5]->abbreviation());
		$this->assertSame('', $columns[6]->abbreviation());
		$this->assertSame('', $columns[7]->abbreviation());
		$this->assertSame('Stilling i familien', $columns[8]->abbreviation());
		$this->assertSame('Erhverv', $columns[9]->abbreviation());
		$this->assertSame('', $columns[10]->abbreviation());
		$this->assertSame('', $columns[11]->abbreviation());
		$this->assertSame('', $columns[12]->abbreviation());
		$this->assertSame('', $columns[13]->abbreviation());
		$this->assertSame('', $columns[14]->abbreviation());
		$this->assertSame('', $columns[15]->abbreviation());
		$this->assertSame('Anmærkninger', $columns[16]->abbreviation());

		$this->assertSame('Samtlige Personers Navn (ogsaa Fornavn). Ved Børn, endnu uden Navn, sættes „Dreng“ eller „Pige“.', $columns[0]->title());
		$this->assertSame('Kjønnet. Mandkøn (M.) eller Kvindekøn (Kv.).', $columns[1]->title());
		$this->assertSame('Føderlsaar og Føderladag.', $columns[2]->title());
		$this->assertSame('Ægteskabelig Stillinge. Ugift (U.), Gift (G.), Enkemand eller Enke (E.), Separeret (S.), Fraskilt (F.).', $columns[3]->title());
		$this->assertSame('Trossamfund (Folkekirken eller Navnet paa det Trossamfund, man tilhører, eller „uden for Trossamfund“).', $columns[4]->title());
		$this->assertSame('Fødested 1) Indenlandsk Fødested: Kebstadens, Handelspladsens eller Sogneta og Amtets Navn (kan Amtet ikke angives, sættes vedkommende Landsdel, f. Eks. Fyn, Jlland osv.), 2) Fedt i Bilandene eller Udlandet: Landets Navn.', $columns[5]->title());
		$this->assertSame('', $columns[6]->title());
		$this->assertSame('', $columns[7]->title());
		$this->assertSame('Stilling i Familien (Husfader, Husmoder, Barn, Slangtning o.l., Tjenestetyende (naar vedkommende har Skudsmaalsbog), Pensioner, logerende.', $columns[8]->title());
		$this->assertSame('', $columns[9]->title());
		$this->assertSame('', $columns[10]->title());
		$this->assertSame('', $columns[11]->title());
		$this->assertSame('', $columns[12]->title());
		$this->assertSame('', $columns[13]->title());
		$this->assertSame('', $columns[14]->title());
		$this->assertSame('', $columns[15]->title());
		$this->assertSame('Anmærkninger.', $columns[16]->title());
	}
}