<?php

namespace Orchid\Screen\Components\Cells;

use Illuminate\Support\Carbon;
use Illuminate\View\Component;
use DateTimeZone;

class DateTime extends Component
{

    /**
     * Create a new component instance.
     *
     * @param float                     $value
     * @param \DateTimeZone|string|null $tz
     * @param string                    $unitPrecision
     */
    public function __construct(
        protected mixed                    $value,
        protected DateTimeZone|null|string $tz = null,
        protected string                   $unitPrecision = 'minute'
    )
    {
    }

    /**
     * Get the view/contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return  Carbon::parse($this->value, $this->tz)->toDateTimeString($this->unitPrecision);
    }
}
