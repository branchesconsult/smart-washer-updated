<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\FaqsResource;
use App\Models\Faqs\Faq;
use App\Repositories\Backend\Faqs\FaqsRepository;
use Illuminate\Http\Request;
use Validator;

/**
 * @resource FAQs
 *
 * All FAQs related functions
 */
class FaqsController extends APIController
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(FaqsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the faqs.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $locale = \App::getLocale();
        $aliases = ['question', 'answer', 'id', 'status'];
        if ($locale == 'ar') {
            $aliases = ['question_ar AS question', 'answer_ar AS answer', 'id', 'status'];
        }
        $faqs = Faq::where('status', 1)
            ->get($aliases);
        return response()->json([
            'data' => $faqs
        ]);
    }

    /**
     * Return the specified resource.
     *
     * @param Faq $faq
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Faq $faq)
    {
        return new FaqsResource($faq);
    }

    /**
     * Creates the Resource for Faq.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = $this->validateFaq($request);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->create($request->all());

        return new FaqsResource(Faq::orderBy('created_at', 'desc')->first());
    }

    /**
     * Update Faq.
     *
     * @param Faq $faq
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Faq $faq)
    {
        $validation = $this->validateFaq($request);

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->update($faq, $request->all());

        $faq = Faq::findOrfail($faq->id);

        return new FaqsResource($faq);
    }

    /**
     * Delete Faq.
     *
     * @param Faq $faq
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Faq $faq, Request $request)
    {
        $this->repository->delete($faq);

        return $this->respond([
            'message' => trans('alerts.backend.faqs.deleted'),
        ]);
    }

    /**
     * validate Faq.
     *
     * @param $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function validateFaq(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'question' => 'required|max:191',
            'answer' => 'required',
        ]);

        return $validation;
    }
}
