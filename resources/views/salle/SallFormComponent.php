<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="numsalle" class="col-sm-2 col-form-label">numsalle</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="numsalle" name="numsalle" v-model="sall.numsalle" >
            <p style="color:red;" v-if="errors" >{{errors.numsalle}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="capacite" class="col-sm-2 col-form-label">capacite</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="capacite" name="capacite" v-model="sall.capacite" >
            <p style="color:red;" v-if="errors" >{{errors.capacite}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">type</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="type" name="type" v-model="sall.type" >
            <p style="color:red;" v-if="errors" >{{errors.type}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nbsurv" class="col-sm-2 col-form-label">nbsurv</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nbsurv" name="nbsurv" v-model="sall.nbsurv" >
            <p style="color:red;" v-if="errors" >{{errors.nbsurv}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addSall()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldSall'
    ],
    mounted() {
        console.log('sallForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            sall : {
                
				numsalle : '',
				capacite : '',
				type : '',
				nbsurv : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addSall()
        {   
            var url = 'http://localhost:8000/api/salle/';
            var type = 'post';
            if(this.editMethod) {url+=this.sall.numsalle;type='put'}
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
        