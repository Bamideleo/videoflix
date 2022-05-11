<<<<<<< HEAD
<?php

namespace Common\Core;
=======
<?php namespace Common\Core;
>>>>>>> 7e4bef5fee4e50bddb16707f63cdd1fa3b9242b0

use App\User;
use Arr;
use Auth;
use Common\Auth\Roles\Role;
use Common\Core\Prerender\HandlesSeo;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, HandlesSeo;

    /**
     * Authorize a given action for the current user
     * or guest if user is not logged in.
     *
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return \Illuminate\Auth\Access\Response
     */
    public function authorize($ability, $arguments = [])
    {
        if (Auth::check()) {
            [$ability, $arguments] = $this->parseAbilityAndArguments($ability, $arguments);
            return app(Gate::class)->authorize($ability, $arguments);
        } else {
            $guest = new User();
            // make sure ID is not NULL to avoid false positives in authorization
            $guest->forceFill(['id' => -1]);
            $guest->setRelation('roles', Role::where('guests', 1)->get());
            return $this->authorizeForUser($guest, $ability, $arguments);
        }
    }

    /**
     * @param array $data
     * @param int $status
     * @param array $options
     * @return JsonResponse|Response
     */
    public function success($data = [], $status = 200, $options = [])
    {
        $data = $data ?: [];
<<<<<<< HEAD
        if (!Arr::get($data, 'status')) {
=======
        if ( ! Arr::get($data, 'status')) {
>>>>>>> 7e4bef5fee4e50bddb16707f63cdd1fa3b9242b0
            $data['status'] = 'success';
        }

        // only generate seo tags if request is coming from frontend and not from API
        if (request()->isFromFrontend() && $response = $this->handleSeo($data, $options)) {
            return $response;
        }

<<<<<<< HEAD
        foreach ($data as $key => $value) {
=======
        foreach($data as $key => $value) {
>>>>>>> 7e4bef5fee4e50bddb16707f63cdd1fa3b9242b0
            if ($value instanceof Arrayable) {
                $data[$key] = $value->toArray();
            }
        }

        return response()->json($data, $status);
    }

    /**
     * Return error response with specified messages.
     */
    public function error(string $message = '', array $errors = [], int $status = 422, $data = []): JsonResponse
    {
        $data = array_merge(
            $data,
            ['message' => $message, 'errors' => $errors ?: []],
        );
        return response()->json($data, $status);
    }
}
