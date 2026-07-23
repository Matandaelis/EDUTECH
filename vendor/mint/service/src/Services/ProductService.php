<?php

namespace Mint\Service\Services;

use App\Helpers\SysHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Mint\Service\Actions\GetData;
use Mint\Service\Actions\UpdateApp;
use Mint\Service\Events\ProductUpdate;
use Mint\Service\Http\Resources\ProductResource;

class ProductService
{
    public function getInfo(): ProductResource
    {
        $data = (new GetData)->execute('product');

        event(new ProductUpdate($data));

        return ProductResource::make(Arr::get($data, 'product'));
    }

    public function confirm(): array
    {
        $data = (new GetData)->execute();

        $app = SysHelper::getAppContent();

        event(new ProductUpdate($data));

        return compact('data', 'app');
    }

    public function license(Request $request): void
    {
        SysHelper::setApp([
            'INSTALLED' => SysHelper::getApp('INSTALLED') ?: 'local-installed',
            'AC'        => $request->access_code ?: SysHelper::getApp('AC'),
            'EMAIL'     => $request->email ?: SysHelper::getApp('EMAIL'),
        ]);
        
        return;
    }

    public function update(Request $request): void
    {
        $data = (new GetData)->execute('product');

        (new UpdateApp)->execute($data);
    }
}
