$(document).ready(function () {
    // show edu btn 
    $('#add-edcucation-open-btn').on('click', function () {
        if ($('#add_edu_icon').attr('class') === "ri-add-circle-line") {
            // ri-close-circle-line
            $('#add_edu_icon').attr('class', 'ri-close-circle-line');
            $('#edu-add-text').html("Remove");
        }
        else {
            $('#add_edu_icon').attr('class', 'ri-add-circle-line');
            $('#edu-add-text').html("Add");
        }
        $('#edu-froms').toggle(300);
    });
    // append education 
    $('#add_more_edu').on('click', function () {
        let div = `<div class="row">
      <!-- Qualification  -->
      <div class="col-lg-6">
          <div class="form-group select-style select-style-icon">
              <label class="form-label"
                  for="input-1">Qualification</label>
              <select class="form-control form-icons select-active">
                  <option>select</option>
                  <option>10 th</option>
                  <option>+2</option>
                  <option>BCA</option>
                  <option>B.TECH</option>
              </select>
          </div>
      </div>
      <!-- Specialization -->
      <div class="col-lg-6">
          <div class="form-group select-style select-style-icon">
              <label class="form-label"
                  for="input-1">Specialization</label>
              <select class="form-control form-icons select-active">
                  <option>select</option>
                  <option>UI/UX</option>
                  <option>Web development</option>
                  <option>SEO</option>
                  <option>Photoshop</option>
              </select>
          </div>
      </div>
      <!-- Course Type  -->
      <div class="col-lg-6">
          <div class="from-group mb-16">
              <label for="" class="form-label">Course Type</label>
              <div class="btn-group btn-group-sm d-flex gender-div">
                  <!-- fulltime  -->
                  <input type="radio" name="c_type" id="c_fulltime">
                  <label for="c_fulltime" title="fulltime"
                      class="br-4"><span class="r-text">Full
                          time</span></label>
                  <!-- parttime  -->
                  <input type="radio" name="c_type" id="c_parttime">
                  <label for="c_parttime" title="parttime"><span
                          class="r-text">Part time</span></label>
                  <!-- distance  -->
                  <input type="radio" name="c_type" id="c_distance">
                  <label for="c_distance" title="distance"
                      class="br-4"><span
                          class="r-text">Distance</span></label>
              </div>
          </div>
      </div>
      <!-- University/Institute  -->
      <div class="col-lg-6">
          <div class="form-group">
              <label class="form-label" for="input-1">University/Institute
              </label>
              <input class="form-control" id="input-1" type="text"
                  required="" name="fullname"
                  placeholder="utkal University">
          </div>
      </div>
      <!-- year of passing  -->
      <div class="col-lg-6">
          <div class="form-group select-style select-style-icon">
              <label class="form-label" for="input-1">year of
                  passing</label>
              <select class="form-control form-icons select-active">
                  <option>select</option>
                  <option>1999</option>
                  <option>2000</option>
                  <option>2001</option>
                  <option>2002</option>
              </select>
          </div>
      </div>
      <!-- Percentage  -->
      <div class="col-lg-6">
          <div class="form-group">
              <label class="form-label" for="input-1">Percentage
              </label>
              <input class="form-control" id="input-1" type="text"
                  required="" name="fullname"
                  placeholder="utkal University">
          </div>
      </div>
      
  </div>`;
        $('.education-container').append(div).hide().show(300);
        $('#edu_delete').css('display', 'block');
    });
    // experience c_experience
    $('.fr-ex-check').on('change', function () {
        if ($('#c_experience').is(':checked') === true) {
            $('#experience-container').show(300);
        }
        else {
            $('#experience-container').hide(300);
        }
    });
    // company name keyup 
    $('#emp_comp_name').on('keyup', function () {
        if ($(this).val().length >= 1) {
            $('#after-ex-container').show(300);
        }
        else {
            $('#after-ex-container').hide(300);
        }
    });
    // emp type key up 
    $('.experience_emp_type').on('change', function () {
        //   current emp start 
        if ($('#emp_current').is(':checked') === true) {
            $('#notice-period-div').show(300);
            $('.d-to-div').hide(100);
            $('.need-col-4').addClass('col-lg-4').removeClass('col-lg-3');

        }
        else {
            $('#notice-period-div').hide(300);
            $('.need-col-4').addClass('col-lg-3').removeClass('col-lg-4');
            $('.d-to-div').show(100);
        }
        //   current end     
    });
    // notice period 
    $('#notice-period-select').on('change', function () {
        if ($(this).val() === "serving notice") {
            $('#last-work-day-div').show(300);
        }
        else {
            $('#last-work-day-div').hide(100);

        }
    });
    $('.experience_emp_type').on('change', function () {
        if ($('#emp_prv').is(':checked') || $('#emp_other').is(':checked')) {
            $('#last-work-day-div').hide(100);
            $('#notice-period-select').val(" ");
        }
    });
    // show experience 
    $('#add-experience-open-btn').on('click', function () {
        if ($('#add_ex_icon').attr('class') === "ri-add-circle-line") {
            // ri-close-circle-line
            $('#add_ex_icon').attr('class', 'ri-close-circle-line');
            $('#ex-add-text').html("Remove");
        }
        else {
            $('#add_ex_icon').attr('class', 'ri-add-circle-line');
            $('#ex-add-text').html("Add");
        }
        $('#experience-forms-div').toggle(300);
    });

    // append experience 
    $('#add_more_experience').on('click', function () {
        let experienceData = `<div class="row">
        <div class="col-lg-12">
        <h6 class="apply-info-title">Add More Experience</h6>
</div>
       <div class="col-lg-6">
           <div class="form-group">
               <label class="form-label" for="emp_comp_name">Previous Employeer
               </label>
               <input class="form-control" id="emp_comp_name" type="text" name="fullname" placeholder="Eastmile tech">
           </div>
       </div>
       <div class="col-lg-6">
           <div class="form-group">
               <label class="form-label" for="emp_comp_name">Previous Designation
               </label>
               <input class="form-control" id="emp_comp_name" type="text" name="fullname" placeholder="Software developer">
           </div>
       </div>
       <div class="col-lg-12">
           <div class="row">
               <div class="col-lg-3 need-col-4">
                   <div class="col-lg-12"><label class="form-label" for="input-1">
                           From</label></div>
                   <div class="form-group s-box-sm select-style select-style-icon">

                       <select class="form-control form-icons select-active">
                           <option>month</option>
                           <option>Jan</option>
                           <option>Fab</option>
                           <option>March</option>
                           <option>April</option>
                       </select>
                   </div>
               </div>
               <div class="col-lg-3 need-col-4">
                   <div class="op-0"><label class="form-label" for="input-1">
                           y</label></div>
                   <div class="form-group s-box-sm select-style select-style-icon">

                       <select class="form-control  form-icons select-active">
                           <option>year</option>
                           <option>1999</option>
                           <option>2000</option>
                           <option>2001</option>
                           <option>2002</option>
                       </select>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="col-lg-12"><label class="form-label" for="input-1">
                           To</label></div>
                   <div class="form-group s-box-sm select-style select-style-icon">

                       <select class="form-control form-icons select-active">
                           <option>month</option>
                           <option>Jan</option>
                           <option>Fab</option>
                           <option>March</option>
                           <option>April</option>
                       </select>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="op-0"><label class="form-label" for="input-1">
                           ty</label></div>
                   <div class="form-group s-box-sm select-style select-style-icon">

                       <select class="form-control  form-icons select-active">
                           <option>year</option>
                           <option>1999</option>
                           <option>2000</option>
                           <option>2001</option>
                           <option>2002</option>
                       </select>
                   </div>
               </div>
           

           </div>
       </div>

   </div>`;
        $('#experience-container').append(experienceData).hide().show();
    });


});