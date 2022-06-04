<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DataTablesTest extends DuskTestCase
{
    /**
     * Test home page with dataTables example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('DataTables Paging Responsive')
                ->assertSee('Example 1: Table with empty data')
                ->assertSee('Example 2: Table with data i18n, language en-GB')
                ->assertSee('Example 3: Table with data i18n, language vi');
        });
    }

    /**
     * Test empty table.
     *
     * @return void
     */
    public function testEmptyTable()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertSee('Showing 0 to 0 of 0 entries')
                ->with('.dataTables_paginate', function ($paginate) {
                    $paginate->assertDontSee(0);
                })
                ->resize(375, 667)
                ->assertSee('0 - 0 / 0')
                ->with('.dataTables_paginate', function ($paginate) {
                    $paginate->assertSee(0);
                });
        });
    }

    /**
     * Test page working in dataTable.
     *
     * @return void
     */
    public function testPageWorkingDataTable()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->resize(1920, 1080)
                ->with('#datatable-example2_wrapper', function ($dataTable) {
                    $dataTable->assertDontSee('Showing 0 to 0 of 0 entries')
                        ->with('.dataTables_paginate', function ($paginate) {
                            $paginate->assertDontSee(0)
                                ->assertSeeIn('.page-item.active .page-link', 1);
                        })
                        ->resize(375, 667)
                        ->assertDontSee('0 - 0 / 0')
                        ->with('.dataTables_paginate', function ($paginate) {
                            $paginate->assertDontSee(0)
                                ->assertSelected('.dt-select2-boundary > select', 1);
                        })
                        ->select('page', 2)
                        ->assertSee('11 - 20')
                        ->resize(1920, 1080)
                        ->with('.dataTables_paginate', function ($paginate) {
                            $paginate->assertSeeIn('.page-item.active .page-link', 2);
                        });
                });
        });
    }

    /**
     * Test i18n dataTable with en-GB and vi.
     *
     * @return void
     */
    public function testI18nDataTable()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->resize(1920, 1080)
            ->with('#datatable-example2_wrapper', function ($dataTable) {
                $dataTable
                    ->with('.dataTables_paginate', function ($paginate) {
                        $paginate->assertSeeIn('.page-item.next', 'Next');
                    })
                    ->resize(375, 667)
                    ->with('.dataTables_paginate', function ($paginate) {
                        $paginate->assertSeeIn('.paginate_page', 'Page');
                    })
                    ->resize(1920, 1080)
                    ->with('.dataTables_paginate', function ($paginate) {
                        $paginate->assertSeeIn('.page-item.next', 'Next');
                    });
            });
            $browser
                ->resize(1920, 1080)
                ->with('#datatable-example3_wrapper', function ($dataTable) {
                    $dataTable
                        ->with('.dataTables_paginate', function ($paginate) {
                            $paginate->assertSeeIn('.page-item.next', 'Sau');
                        })
                        ->resize(375, 667)
                        ->assertDontSee('0 - 0 / 0')
                        ->with('.dataTables_paginate', function ($paginate) {
                            $paginate->assertSeeIn('.paginate_page', 'Trang');
                        })
                        ->resize(1920, 1080)
                        ->with('.dataTables_paginate', function ($paginate) {
                            $paginate->assertSeeIn('.page-item.next', 'Sau');
                        });
                });
        });
    }
}
