<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="nomdep" class="col-sm-2 col-form-label">nomdep</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomdep" name="nomdep" v-model="apparteni.nomdep" >
            <p style="color:red;" v-if="errors" >{{errors.nomdep}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="idens" class="col-sm-2 col-form-label">idens</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="idens" name="idens" v-model="apparteni.idens" >
            <p style="color:red;" v-if="errors" >{{errors.idens}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addApparteni()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldApparteni'
    ],
    mounted() {
        console.log('apparteniForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            apparteni : {
                
				nomdep : '',
				idens : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addApparteni()
        {   
            var url = 'http://localhost:8000/api/appartenir/';
            var type = 'post';
            if(this.editMethod) {url+=this.apparteni.;type='put'}
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
        