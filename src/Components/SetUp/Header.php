<?php

namespace PowerComponents\LivewirePowerGrid\Components\SetUp;

use Livewire\Wireable;

final class Header implements Wireable
{
    public string $name = 'header';

    public bool $searchInput = false;

    public bool $toggleColumns = false;

    public bool $softDeletes = false;

    public bool $showMessageSoftDeletes = false;

    public string $includeViewOnTop = '';

    public string $includeViewOnBottom = '';

    public bool $wireLoading = true;

    /**
     * @return $this
     * Show search input into component
     */
    public function showSearchInput(): Header
    {
        $this->searchInput = true;

        return $this;
    }

    public function showSoftDeletes(bool $showMessage = true): Header
    {
        $this->softDeletes            = true;
        $this->showMessageSoftDeletes = $showMessage;

        return $this;
    }

    /**
     * default false
     */
    public function showToggleColumns(): Header
    {
        $this->toggleColumns = true;

        return $this;
    }

    /**
     * Include custom view on top
     */
    public function includeViewOnTop(string $viewPath): Header
    {
        $this->includeViewOnTop = $viewPath;

        return $this;
    }

    /**
     * Include custom view on bottom
     */
    public function includeViewOnBottom(string $viewPath): Header
    {
        $this->includeViewOnBottom = $viewPath;

        return $this;
    }

    /**
     * Hides the default loading state
     */
    public function withoutLoading(): Header
    {
        $this->wireLoading = false;

        return $this;
    }

    public function toLivewire(): array
    {
        return (array) $this;
    }

    public static function fromLivewire($value)
    {
        return $value;
    }
}
