<?php

namespace App\Http\Middleware;
use App\Student;
use App\Role;
use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $student = Student::find($request->id);
        if(!empty($student)){
            $student = Student::find($request->id)->role()->first();
            if ($student->role_name == 'junier') {
                return $next($request);
            }else{
                return redirect('bye');
            }
        }       
    }
}
