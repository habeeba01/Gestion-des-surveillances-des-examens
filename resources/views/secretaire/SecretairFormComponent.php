<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="idsec" class="col-sm-2 col-form-label">idsec</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="idsec" name="idsec" v-model="secretair.idsec" >
            <p style="color:red;" v-if="errors" >{{errors.idsec}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nomsec" class="col-sm-2 col-form-label">nomsec</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomsec" name="nomsec" v-model="secretair.nomsec" >
            <p style="color:red;" v-if="errors" >{{errors.nomsec}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="prenomsec" class="col-sm-2 col-form-label">prenomsec</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="prenomsec" name="prenomsec" v-model="secretair.prenomsec" >
            <p style="color:red;" v-if="errors" >{{errors.prenomsec}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="emailsec" class="col-sm-2 col-form-label">emailsec</label>
            <div class="col-sm-10">
            <input type="email"  class="form-control" id="emailsec" name="emailsec" v-model="secretair.emailsec" >
            <p style="color:red;" v-if="errors" >{{errors.emailsec}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="telsec" class="col-sm-2 col-form-label">telsec</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="telsec" name="telsec" v-model="secretair.telsec" >
            <p style="color:red;" v-if="errors" >{{errors.telsec}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addSecretair()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldSecretair'
    ],
    mounted() {
        console.log('secretairForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            secretair : {
                
				idsec : '',
				nomsec : '',
				prenomsec : '',
				emailsec : '',
				telsec : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addSecretair()
        {   
            var url = 'http://localhost:8000/api/secretaire/';
            var type = 'post';
            if(this.editMethod) {url+=this.secretair.idsec;type='put'}
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
        