<section id="plans" class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4 py-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            
            <p class="card-price text-center">{{ $plan->name }}</p>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li py-2"><i class="fas fa-check"></i> </</span>Period: {{ $plan->time }}</li>
              <hr>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Minimum Amount: {{ $plan->min_amount }}</li>
              <hr>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Maximum Amount: {{ $plan->max_amount }}</li>
              <hr>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Plan R.O.I. : {{ $plan->roi }}</li>
              <hr>
              <li><span class="fa-li"><i class="fas fa-check"></i> <h6> <b> Plan Description: </b></h6></span>{{ $plan->description }}</li>
              <hr>
             
            </ul>
            <a href="/register" class="btn  btn-get-started text-uppercase">select</a>
          </div>
        </div>
      </div>
    

    </div>
  </div>
</section>