<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="nomelem" class="col-sm-2 col-form-label">nomelem</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomelem" name="nomelem" v-model="elemen.nomelem" >
            <p style="color:red;" v-if="errors" >{{errors.nomelem}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="coeff" class="col-sm-2 col-form-label">coeff</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="coeff" name="coeff" v-model="elemen.coeff" >
            <p style="color:red;" v-if="errors" >{{errors.coeff}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="noteelem" class="col-sm-2 col-form-label">noteelem</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="noteelem" name="noteelem" v-model="elemen.noteelem" >
            <p style="color:red;" v-if="errors" >{{errors.noteelem}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nommod" class="col-sm-2 col-form-label">nommod</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nommod" name="nommod" v-model="elemen.nommod" >
            <p style="color:red;" v-if="errors" >{{errors.nommod}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="idens" class="col-sm-2 col-form-label">idens</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="idens" name="idens" v-model="elemen.idens" >
            <p style="color:red;" v-if="errors" >{{errors.idens}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addElemen()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldElemen'
    ],
    mounted() {
        console.log('elemenForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            elemen : {
                
				nomelem : '',
				coeff : '',
				noteelem : '',
				nommod : '',
				idens : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addElemen()
        {   
            var url = 'http://localhost:8000/api/element/';
            var type = 'post';
            if(this.editMethod) {url+=this.elemen.;type='put'}
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
        