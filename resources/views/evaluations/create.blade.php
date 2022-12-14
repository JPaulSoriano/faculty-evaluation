

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3><span class="font-weight-bold">You're Currently Evaluating:</span> {{ $faculty->name }}</h3>
        </div>
    <form action="{{ route('evaluatestore', $faculty) }}" method="POST" class="w-100">
        @csrf
        <div class="col-sm-4">
            <div class="form-group">
                <label>Select Your Current Section</label>
                <select class="form-control" name="section_id">
                @foreach ($sections as $section)
                <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-12 my-1">
            <div class="card">
                <div class="card-header">Rating Legend</div>
                <div class="card-body">
                    <div>5 = Strongly Agree 4 = Agree 3 = Uncertain 2 = Disagree 1 = Strongly Disagree</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 my-1">
            <table class="table table-bordered">
                @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->name }}</th>
                    <th width="280px">Rate</th>
                </tr>

                    @foreach($category->questions as $question)
                        <tr>
                            <td>{{ $question->question }}</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" value="1">
                                    <label class="form-check-label">1</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" value="2">
                                    <label class="form-check-label">2</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" value="3">
                                    <label class="form-check-label">3</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" value="4">
                                    <label class="form-check-label">4</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rate" value="5">
                                    <label class="form-check-label">5</label>
                                  </div>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
