@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create new Question</div>

                    <div class="card-body">
                        <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question[question]" class="form-control" placeholder="add a question" value="{{ old('question.question') }}">
                                @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>

                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input type="text" name="answers[][answer]" class="form-control" placeholder="add a question answer 1" value="{{ old('answers.0.answer') }}">
                                        @error('answers.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input type="text" name="answers[][answer]" class="form-control" placeholder="add a question answer 2" value="{{ old('answers.1.answer') }}">
                                        @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input type="text" name="answers[][answer]" class="form-control" placeholder="add a question answer 3" value="{{ old('answers.2.answer') }}">
                                        @error('answers.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input type="text" name="answers[][answer]" class="form-control" placeholder="add a question answer 4" value="{{ old('answers.3.answer') }}">
                                        @error('answers.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </fieldset>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">Add Question</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
