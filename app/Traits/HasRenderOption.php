<?php

namespace App\Traits;

trait HasRenderOption
{
    public function renderOption(array $data): ?string
    {
        $result = null;

        if (sizeof($data[0]) > 2) {
            foreach ($data as $item)
                $result .= "<option value='" . $item[0] . "'>" . $item[1] . " - (" . $item[2] . ")</option>";
        } else {
            foreach ($data as $item)
                $result .= "<option value='" . $item[0] . "'>" . $item[1] . "</option>";
        }

        return $result;
    }

    public function getOptionForRender($model, array $column): array
    {
        $data = $model::get($column)
                ->map(function ($item) {
                    return array_values($item->toArray());
                })
                ->toArray();

        return $data;
    }
}
