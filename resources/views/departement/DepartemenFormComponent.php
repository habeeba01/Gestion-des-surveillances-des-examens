<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="nomdep" class="col-sm-2 col-form-label">nomdep</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomdep" name="nomdep" v-model="departemen.nomdep" >
            <p style="color:red;" v-if="errors" >{{errors.nomdep}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">description</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="description" name="description" v-model="departemen.description" >
            <p style="color:red;" v-if="errors" >{{errors.description}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addDepartemen()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldDepartemen'
    ],
    mounted() {
        console.log('departemenForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            departemen : {
                
				nomdep : '',
				description : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addDepartemen()
        {   
            var url = 'http://localhost:8000/api/departement/';
            var type = 'post';
            if(this.editMethod) {url+=this.departemen.nomdep;type='put'}
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
        