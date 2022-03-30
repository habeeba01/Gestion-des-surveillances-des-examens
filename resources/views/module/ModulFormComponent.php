<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="nommod" class="col-sm-2 col-form-label">nommod</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nommod" name="nommod" v-model="modul.nommod" >
            <p style="color:red;" v-if="errors" >{{errors.nommod}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="notemod" class="col-sm-2 col-form-label">notemod</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="notemod" name="notemod" v-model="modul.notemod" >
            <p style="color:red;" v-if="errors" >{{errors.notemod}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nbelem" class="col-sm-2 col-form-label">nbelem</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nbelem" name="nbelem" v-model="modul.nbelem" >
            <p style="color:red;" v-if="errors" >{{errors.nbelem}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addModul()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldModul'
    ],
    mounted() {
        console.log('modulForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            modul : {
                
				nommod : '',
				notemod : '',
				nbelem : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addModul()
        {   
            var url = 'http://localhost:8000/api/module/';
            var type = 'post';
            if(this.editMethod) {url+=this.modul.nommod;type='put'}
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
        