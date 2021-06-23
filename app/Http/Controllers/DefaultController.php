<?php


namespace App\Http\Controllers;


use App\Http\Requests\DefaultRequest;
use App\Mocks\FakeRepository;
use App\Services\DefaultService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class DefaultController
{
    /**
     * @var FakeRepository
     */
    private $repo;
    public $defaultService;

    public function __construct(FakeRepository $fakeRepository,DefaultService $defaultService)
    {
        $this->repo = $fakeRepository;
        $this->defaultService = $defaultService;
    }

    public function index(DefaultRequest $request)
    {
        $data = $request->validated();
        $result = $this->defaultService->saveProductByType($data);
        if (!$result){
            throw new Exception('some erro msg');
        }

        return new Response(['status' => 'success', 200]);
    }
}
