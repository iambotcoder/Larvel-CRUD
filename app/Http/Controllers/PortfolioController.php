<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserPortfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $portfolios = UserPortfolio::all();
        return view('portfolios.index',compact('portfolios'));
        // return view('portfolios.index',compact());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return response()->json($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'bio' => 'required|string',
            'institution_name_1' => 'nullable|string|max:255',
            'degree_course_1' => 'nullable|string|max:255',
            'organization_name_1' => 'nullable|string|max:255',
            'institution_name_2' => 'nullable|string|max:255',
            'degree_course_2' => 'nullable|string|max:255',
            'organization_name_2' => 'nullable|string|max:255',
            'post_role_1' => 'nullable|string|max:255',
            'years_experience_1' => 'nullable|numeric',
            'post_role_2' => 'nullable|string|max:255',
            'years_experience_2' => 'nullable|numeric',
        ]);
        // return response()->json(['organization_name'=>$validatedData['organization_name'],'post_role'=>$validatedData['post_role'],'years_experience'=>$validatedData['years_experience']]);
        

        $portfolio = new UserPortfolio();
        $portfolio->name = $validatedData['name'];
        $portfolio->email = $validatedData['email'];
        $portfolio->bio = $validatedData['bio'];
        $education = [
            'institution_name'=>array(
                $validatedData['institution_name_1'],
                $validatedData['institution_name_2'])
            ,
            'degree_course'=>array(
                $validatedData['degree_course_1'],
                $validatedData['degree_course_2']
            )
        ];
        $portfolio->education = json_encode($education);
        
        $portfolio->work_experience = json_encode([
            'organization_name'=>[
                $validatedData['organization_name_1'],$validatedData['organization_name_2']
            ],
            'post_role'=>[
                $validatedData['post_role_1'],
                $validatedData['post_role_2']
            ],
            'years_experience'=>[
                $validatedData['years_experience_1'],$validatedData['years_experience_2']
            ]
        ]);
        $portfolio->user_id = $request->user()->id;

        $portfolio->save();
        return redirect()->route('portfolios.index')->with('success','product Added Successfully');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolio = Userportfolio::find($id);
        $education = json_decode($portfolio->education,true);
        $work_experience = json_decode($portfolio->work_experience,true);
        // return response()->json($portfolio);
        return view('portfolios.show',compact('portfolio','education','work_experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Userportfolio::find($id);
        $education = json_decode($portfolio->education,true);
        $work_experience = json_decode($portfolio->work_experience,true);
        return view('portfolios.edit',compact('portfolio','education','work_experience'))->with('success','product Edited Successfully');;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'bio' => 'required|string',
            'institution_name_1' => 'nullable|string|max:255',
            'degree_course_1' => 'nullable|string|max:255',
            'organization_name_1' => 'nullable|string|max:255',
            'institution_name_2' => 'nullable|string|max:255',
            'degree_course_2' => 'nullable|string|max:255',
            'organization_name_2' => 'nullable|string|max:255',
            'post_role_1' => 'nullable|string|max:255',
            'years_experience_1' => 'nullable|numeric',
            'post_role_2' => 'nullable|string|max:255',
            'years_experience_2' => 'nullable|numeric',
        ]);

        $portfolio = UserPortfolio::find($id);
        $portfolio->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'bio' => $request->input('bio'),
            'education' => json_encode([
                'institution_name'=>[
                    $request->input('institution_name_1'),$request->input('institution_name_2')
                ],
                'degree_course'=>[
                    $request->input('degree_course_1'),
                    $request->input('degree_course_2')
                ]
                ]),
            'work_experience' => json_encode([
                'organization_name'=>[
                    $request->input('organization_name_1'),$request->input('organization_name_2')
                ],
                'post_role'=>[
                    $request->input('post_role_1'),
                    $request->input('post_role_2')
                ],
                'years_experience'=>[
                    $request->input('years_experience_1'),$request->input('years_experience_2')
                ]
                ]),
            'user_id' => $request->user()->id,
        ]);
        return redirect()->route('portfolios.show',$portfolio->id)->with('success','product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = UserPortfolio::find($id);
        if($portfolio){
            $portfolio->delete();
            return redirect()->route('portfolios.index',compact('portfolio'))->with('success','product Deleted Successfully');
        }
        else{
            return redirect()->route('portfolios.index',compact('portfolio'))->with('failure','product Not Found');
        }
    }
}
