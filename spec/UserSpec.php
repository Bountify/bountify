<?php
namespace spec\Bountify;
use PhpSpec\ObjectBehavior;
class UserSpec extends ObjectBehavior {
	function let() {
		$this->beConstructedWith([
			'first_name' => 'Bob',
			'last_name' => 'Green',
			'username' => 'bgreen',
			'email' => 'bob.green@gmail.com',
			'password' => 'This_is_a_g00d_password',
		]);
	}
	function it_is_initializable() {
		$this->shouldHaveType('Bountify\User');
	}
	function it_requires_a_first_name() {
		$this->valid()->shouldBeTrue();
	}
	function it_requires_a_last_name() {
		$this->valid()->shouldBeTrue();
	}
	function it_requires_a_email() {
		$this->valid()->shouldBeTrue();
	}
}