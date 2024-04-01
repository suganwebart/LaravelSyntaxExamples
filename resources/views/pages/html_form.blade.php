@extends('layouts.default')
@section('title','Blade Template Inheritence')
@section('main-content')
        



        <div class="container">
    <table class="table table-sm">
    <thead>
        <tr>
            <th>Names</th>
            
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td >
            <h1>Contact Page</h1>  
    {!! Form::open(['route'=>'html_form.store']) !!}  
         
    <div class="form-group">  
    {{ form::label('name','Name')}}  
    {{form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}  
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>  
    <br>  
    <div class="form-group">  
    {{ form::label('gender','Gender')}}  
    {{ form::radio('gender','Male')}} Male  
    {{ form::radio('gender','Female')}} Female  
    @error('gender')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>  
    <br>  
    <div class="form-group">  
    {{ form::label('profile','Profile')}}  
    {{form::select('profilelist', ['S' => 'Software Developer', 'Q' => 'QA Analyst', 'M' => 'Manager', 'H' => 'HR'], null, ['placeholder' => 'Pick a profile...', 'id' => 'size', 'class' => 'select select-big'], ['S' => ['class' => 'option option-red']]) }}

    @error('profilelist')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>  
    <br>  
    <div class="form-group">  
    {{ form::label('dob','Date of Birth')}}  
    {{Form::date('dob', \Carbon\Carbon::now())}}  
    </div>  
    @error('dob')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>  
    {{form::label('skills','Skills Description')}}  
    <div class="form-group">  
      
    {{form::textarea('body','',['placeholder'=>'Skills Description'])}}  
    </div>  
    @error('body')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>  
    <div class="form-group">  
    {{ form::label('percentage','Percentage in 12th')}}  
    {{form::text('percent','',['class'=>'form-control','placeholder'=>'Percentage in 12th'])}}  
    </div>  
    @error('percent')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>  
    <div class="form-group">  
    {{ form::label('experience','Experience')}}  
    {{form::number('exp','number')}}  
    </div>  
    <br>  
    @error('exp')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <div class="form-group">  
    {{ form::label('expected_salary','Expected Salary')}}  
    {{form::text('salary','',['placeholder'=>'Expected Salary'])}}  
    </div>  
    <br>  
    @error('salary')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <div class="form-group">  
    {{ form::label('resume','Resume Upload')}}  
    {{Form::file('resume')}}  
    </div>  
    <br>  
    @error('resume')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  
      
   
    {!!Form::close()!!}  
     

           </td>
            
            
        </tr>
        
    </tbody>
</table>

          
                
        </div>
@endsection