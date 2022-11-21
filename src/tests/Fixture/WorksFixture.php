<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WorksFixture
 */
class WorksFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'artist' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
