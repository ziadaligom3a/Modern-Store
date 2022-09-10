<div class="contact" id="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>{{ __('Contact Now') }}
                

                </h2>
               
             </div>
          </div>
       </div>
       @if ($message = Session::get('Success'))
       <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>	
               <strong>{{ $message }}</strong>
       </div>
       @endif
       
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <form id="request" class="main_form" action="/Contact" method="post">
               @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" required placeholder="Name" type="text" name="name"> 
                     
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" required placeholder="Email" type="email" name="email"> 
  
                   </div>

                   <div class="col-md-12">
                      <textarea class="textarea" required placeholder="Message" type="type" Message="Name" name="message">Message </textarea>

                     </div>
                   <div class="col-md-12">
                      <button type="submit" class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
 