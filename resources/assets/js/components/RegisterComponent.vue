<template>
  <div class="col-md-offset-1 col-md-10 col-sm-12">
   <div class="section-title">
        <h3 class="text-center">Getting Started</h3>
       <hr>
        <h2><small>The creative web & mobile application focused on developing designs with collaboration of the design community.</small></h2>
       <hr>
       <h2>Tell us about yourself</h2>
       <form>
         <div class="col-md-4 col-sm-6"></div>
          <div class="col-md-4 col-sm-6">
           <div class="panel panel-default pro-upload-card">
             <div class="panel-body">
             <div class="circle-profile profile-upload-overlay">

             </div>
             <h3 class="text-center">Profile Image</h3>
             <hr>
             <input type="file" id="profile-upload-btn" >
             </div>
           </div>
         </div>
          <div class="col-md-4 col-sm-6">

          </div>
         <div class="col-md-12 col-sm-3">
            <div class="checkbox-idea">
                 <p>
                   <input type="checkbox" name="student" class="student"/>
                   <input type="checkbox" name="lecturer" class="lecturer"/>
                   <input type="checkbox" name="professional" class="professional"/>
                 </p>
               </div>
         </div>

        <div class="col-md-6 col-sm-6">
             <input type="text" class="form-control" placeholder="Name" name="name" v-model="user.name">
        </div>
        <div class="col-md-6 col-sm-6">
             <input type="email" class="form-control" placeholder="Email" name="email" v-model="user.email">
        </div>
        <div class="col-md-6 col-sm-6">
             <input type="text" class="form-control" placeholder="Password" name="password" v-model="user.password">
        </div>
        <div class="col-md-6 col-sm-6">
             <input type="text" class="form-control" placeholder="Location" name="location" v-model="user.location">
        </div>
        <div class="col-md-6 col-sm-6">
             <input type="text" class="form-control" placeholder="Profession" name="profession" v-model="user.profession">
        </div>
        <div class="col-md-6 col-sm-6">
             <select class="form-control" v-model="user.role">
                  <option>Role Selection</option>
                  <option>Student</option>
                  <option>Teacher</option>
                  <option>Professional</option>
             </select>
        </div>
        <div class="col-md-6 col-sm-6">
             <select class="form-control" name="intrest" v-model="user.intrest">
                  <option>Main Interest</option>
                  <option value="ui">Ui-design</option>
                  <option value="ux">ux-design</option>
                  <option value="logo">Logo-design</option>
                  <option value="mobile">Mobile-design</option>
             </select>
        </div>
        <div class="col-md-12 col-sm-12">
             <textarea class="form-control" rows="5" placeholder="Biography" name="biography" v-model="user.biography"></textarea>
        </div>
        <div class="col-md-2 col-sm-">
            <a href="#" class="cancel">Cancel</a>
        </div>

       <div class="col-md-3 col-sm-4"></div>

       <div class="col-md-2 col-sm-4">
           <button class="form-control pull-center" value="submit" @click.prevent="register">Submit</button>
       </div>
     </form>
   </div>
 </div>
</template>
<script>
  import axios from 'axios';
  export default{
    data: function() {
      return{
        user:{
          name: null,
          email: null,
          password: null,
          role: null,
          location: null,
          intrest: null,
          profession: null,
          biography: null,
        },
      }
    },
    methods:{
      register(user){
        console.log(this.user);
        // var userData = [];
        // userData = this.user;
        // //console.log(userData);
         axios.post('/chatdemo/public/createProfile', this.user)
         .then(response=>{
             this.messages = response.data;
         });
        //console.log(data);
      },
    }
  };
</script>
