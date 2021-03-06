@extends('Dashboardadmin.layout.layout')



@section('head')
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<style>
  .select2-selection__rendered{
    background: rgb(0, 1, 1);
    border: 1px solid rgba(115, 115, 115, 0.48)!important;
    /* color: #fff; */
    float: left;
    width: 100%;
    height: 40px;
    border-radius: 5px;
    /* border: 0; */
    box-shadow: none;
    border: 2px solid #d7d7d7;
    margin-top: 10px;
  }
  .select2-container--default .select2-selection--single{    background-color: 0!important;border: 0!important}
</style>
@endsection







@section('content')
      <section class="content-header"  style="background-color:; " dir="rtl">
      <h1 class="fa fa-dashboard" >
   أضافة منتج جديد
      
      </h1>
      <ol class="breadcrumb" >
        <li><a href="{{url('adminpanel')}}">الرئيسية</a></li>
        <li class=""><a href="{{url('/adminpanel/product')}}">التحكم فى المنتجات  </a></li>
        
      </ol>
    </section>


      <section class="content" style="background-color:; ">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <form  dir="rtl" role="form" method="POST" action="{{ url('/adminpanel/product/stor') }}" enctype="multipart/form-data">

                     {{csrf_field()}}



<table  id="customers">
<tr>
<td style="width:50%;" >
                          
                         

                                  <input  type="text" name="name" 
                                  class="form-control" placeholder=" أسم المنتج " type="text" 
                                class="text2{{ $errors->has(' name') ? ' is-invalid' : '' }}" 
                                name="name" value="{{ old(' name') }}"
                                >
                          
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          
                        </td>
                            <td style="width:50%;">
                         

                      
                        <div class="divwits">
                            <input  type="text" name="price" 
                            class="form-control" placeholder=" سعر المنتج " type="text" 
                            class="text2{{ $errors->has(' price') ? ' is-invalid' : '' }}" 
                            name="  price" value="{{ old(' price') }}"
                          >
                        </div>
                            @if ($errors->has('price'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                      

  </td>
  </tr>
  <tr>
                            <td style="width:50%;">
                         
                         
                          
                            <select  class="form-control " placeholder=" الصنف"
                            name="category_name" id="category_name">
                            <option selected="" disabled="disabled"> الصنف</option>
                            <option > حريمى </option>
                        
                            <option  > رجالى</option>
                        
                            <option > اطفالى</option>
                        
                           
                           
                           </select>
                           
                        
                        
                        </td>
                            <td style="width:50%;">
                   
                            <div class="col-md-10">
                                اضافه صورة 
                                <input  type="file" name="image" accept='image/*'>
                            </div>
                      
 
</td>
</tr>

 <tr>
                            <td style="width:50%;">
                         
                         
                          
                            <select  class="form-control " placeholder=" النوع"
                            name="type" id="type">
                            <option selected="" disabled="disabled"> النوع</option>
                            <option > بنطلون </option>
                            <option  > تيشيرت </option>
                            <option > عباية</option>
                            <option > طرحة </option>
                            <option  > جزمه </option>
                             <option > بدى</option>
                        
                           </select>
                           
                        
                        
                        </td>
                        <td style="width:50%;">
                         
                         
                        <div class="divwits">
                            <input  type="text" name="countities" 
                            class="form-control" placeholder=" الكمية " type="text" 
                            class="text2{{ $errors->has(' countities') ? ' is-invalid' : '' }}" 
                            name="  countities" value="{{ old(' countities') }}"
                        >
                        </div>
                            @if ($errors->has('countities'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('countities') }}</strong>
                                </span>
                            @endif
                        
                     
                     
                     </td>
                     </tr>
           </table>
           <br>

                            <div class="col-md-6 offset-md-4" style="margin-left:51%;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('أضافة المنتج ') }}
                                </button>
                            </div>
                      
              </form>


            </div>
            </div>
          </div>
         </div>
       
 </section>

@endsection

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

