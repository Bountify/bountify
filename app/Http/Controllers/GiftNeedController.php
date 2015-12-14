
<?php
namespace bountify\Http\Controllers;
use bountify\app\GiftNeed;
use Illuminate\Http\Request;
class GiftNeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('giftneeds.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'title'],
            'description' => ['required'],
        ], [
            'url.required' => 'The "Link" field is required.',
            'url.url' => 'Please check the URL in your Link and make sure it is correct.',
            'url.unique' => 'It looks like you have already added an giftNeed with this URL.',
            'title.required' => 'Please supply a meaningful Title for your giftNeed.',

            /*find a way to constrain/validate status of needs
            'status.required' => 'Please supply a meaningful Title for your giftNeed.',
            */
        ]);
        $giftNeed = GiftNeed::create($request->input());
        return redirect()->action('GiftNeedController@edit', [$giftNeed->id])->with('success', 'New giftNeed added successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($giftNeed = GiftNeed::find($id)) {
            return view('giftneeds.edit', ['giftNeed' => $giftNeed]);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'url' => ['required', 'url'],
            'title' => ['required'],
        ], [
            'url.required' => 'The "Link" field is required.',
            'url.url' => 'Please check the URL in your Link and make sure it is correct.',
            'title.required' => 'Please supply a meaningful Title for your giftNeed.',
        ]);
        $giftNeed = GiftNeed::find($id);
        $giftNeed->fill($request->input());
        $giftNeed->save();
        return redirect()->action('GiftNeedController@edit', [$giftNeed->id])->with('success', 'GiftNeed updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}