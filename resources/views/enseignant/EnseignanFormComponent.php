<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="idens" class="col-sm-2 col-form-label">idens</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="idens" name="idens" v-model="enseignan.idens" >
            <p style="color:red;" v-if="errors" >{{errors.idens}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nomens" class="col-sm-2 col-form-label">nomens</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomens" name="nomens" v-model="enseignan.nomens" >
            <p style="color:red;" v-if="errors" >{{errors.nomens}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="prenomens" class="col-sm-2 col-form-label">prenomens</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="prenomens" name="prenomens" v-model="enseignan.prenomens" >
            <p style="color:red;" v-if="errors" >{{errors.prenomens}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="emailens" class="col-sm-2 col-form-label">emailens</label>
            <div class="col-sm-10">
            <input type="email"  class="form-control" id="emailens" name="emailens" v-model="enseignan.emailens" >
            <p style="color:red;" v-if="errors" >{{errors.emailens}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="telens" class="col-sm-2 col-form-label">telens</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="telens" name="telens" v-model="enseignan.telens" >
            <p style="color:red;" v-if="errors" >{{errors.telens}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addEnseignan()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldEnseignan'
    ],
    mounted() {
        console.log('enseignanForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            enseignan : {
                
				idens : '',
				nomens : '',
				prenomens : '',
				emailens : '',
				telens : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addEnseignan()
        {   
            var url = 'http://localhost:8000/api/enseignant/';
            var type = 'post';
            if(this.editMethod) {url+=this.enseignan.idens;type='put'}
            $.ajax({
                url: url,
                type: type,
                datatype: 'json',
                data : $("#form").serialize(),
                success: function(data){
                    console.log(data);
                },
                error: function (request, status, error) {
                    console.log(request);
                    console.log(error);
                    this.errors = request.responseJSON.errors;
                }.bind(this)

               })
        },
        onSubmit(){}
        },
       
        
       
    }
</script>
        