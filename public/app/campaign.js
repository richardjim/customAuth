if (window.Vue) {
new Vue ({
el: '#app' ,
data : {
    isLoading: false,
    url: {
        create : "",
        update: "",
        delete: ""
    },
    campaign: {
        name : '',
        domain: '',
        include_subdomain:"false"
    },
    campaigns: [
    {
        include_subdomain:'',
        name: '',
        domain:'',
       increment:''
    }
    ],
    campaignEdit: {
   increment:'',
    name: '',
    domain:'',
    include_subdomain: ''
    },
},
mounted() {
this.campaigns = JSON.parse($("#campaigns").val());

this.url.create = $("#create-url").val();
this.url.update = $("#update-url").val();
this.url.delete = $("#delete-url").val();
},
methods : {
createCampaign() {
    // alert('frrfr');
    let formData = new FormData();
    formData.append('_token', $('input[name=_token]').val());
    formData.append('name', this.campaign.name);
    formData.append('domain', this.campaign.domain);
    formData.append('subdomain', this.campaign.include_subdomain);
    this.isLoading = true;

    axios.post(this.url.create, formData)
        .then((response) => {
            // console.log(response.data)
            $('#create_campaign').modal('hide');
            this.isLoading = false;

            this.$notify({
                title: 'Success',
                message: response.data.message,
                type: 'success'
            });

            this.campaigns.push(Object.assign({}, response.data.campaign, {}));
        })
        .catch((error) => {
            this.isLoading = false;
            if(error.response){
                this.$notify({
                    title: 'Error',
                    message: error.response.data.message
                });
            }else{
                this.$notify.error({
                    title: 'Error',
                    message: 'oops! Unable to complete request.'
                });
            }

        });
            
},
selectCampaign(index){
    this.campaignEdit = Object.assign({}, this.campaigns[index]);
    console.log('edit',this.campaignEdit);
},
update_campaign(){
    const formData = new FormData();
    formData.append('_token', $('input[name=_token]').val());
    formData.append('domain', this.campaignEdit.domain);
    formData.append('name', this.campaignEdit.name);
    formData.append('increment', this.campaignEdit.increment);
    // formData.append('campaign_id', this.campaignEdit.campaign_id);
    formData.append('include_subdomain',this.campaignEdit.include_subdomain);
    this.isLoading = true;

    axios.post(this.url.update, formData)
        .then((response) => {
            $('#update_campaign').modal('hide');
            this.isLoading = false;

            this.$notify({
                title: 'Success',
                message: response.data.message,
                type: 'success'
            });

            var campaign = response.data.campaign;
            this.campaigns = this.campaigns.map((campaign) => {
                if (campaign.increment === campaign.increment) {
                    campaign = Object.assign({}, campaign);
                }
                return campaign;
            });

            // $('.data-table-custom').DataTable().destroy();
            // $('.data-table-custom').DataTable();
        })
        .catch((error) => {
            this.isLoading = false;
            if(error.response){
                this.$notify.error({
                    title: 'Error',
                    message: error.response.data.message
                });
            }else{
                this.$notify.error({
                    title: 'Error',
                    message: 'oops! Unable to complete request.'
                });
            }

        });
},
deleteCampaign(index){

    // console.log('this....', this.isLoading);
    //  alert(index);
        console.log('index',index);
    let campaign = Object.assign({}, this.campaigns[index]);
    campaign._token = $('input[name=_token]').val();


Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {

    axios.delete(this.url.delete, {data:campaign})
    .then(response => {
        this.isLoading = false;
        this.campaigns.splice(index, 1);
            this.$notify({
            title: 'Success',
            message: response.data.message,
            type: 'success'
        });

        Swal.fire(
        'Deleted!',
        response.data.message,
        'success'
        )
    }).catch(error => {

        // console.log('error', error)

        Swal.fire(
            'Deleted!',
            'failed!',
            'error'
        )
        // if (error.response) {
            // this.isLoading = false;
            // this.$notify.error({
            //     title: 'Error',
            //     message: error.response.data.message
            // });
        // }else{
            // this.$notify.error({
            //     title: 'Error',
            //     message: 'oops! Unable to complete request.'
            // });
        //}
    });



}
})
    // const customAlert = swal({
    //     title: 'Warning',
    //     text: `Are you sure you want to delete this Campaign? This action cannot be undone.`,
    //     icon: 'warning',
    //     closeOnClickOutside: false,
    //     buttons: {
    //         cancel: {
    //             text: "cancel",
    //             visible: true,
    //             className: "",
    //             closeModal: true,
    //         },
    //         confirm: {
    //             text: "Confirm",
    //             value: 'delete',
    //             visible: true,
    //             className: "btn-danger",
    //         }
    //     }
    // });

//     customAlert.then(value => {
//        console.log('one', this)
//         if (value == 'delete') {
//             this.isLoading = true;
//             axios.delete(this.url.delete, {data: campaign})
//                 .then(response => {
//                     this.isLoading = false;
//                     this.campaigns.splice(index, 1);
//                     this.$notify({
//                         title: 'Success',
//                         message: response.data.message,
//                         type: 'success'
//                     });

//                 }).catch(error => {
//                     if (error.response) {
//                         this.isLoading = false;
//                         this.$notify.error({
//                             title: 'Error',
//                             message: error.response.data.message
//                         });
//                     }else{
//                         this.$notify.error({
//                             title: 'Error',
//                             message: 'oops! Unable to complete request.'
//                         });
//                     }
//                 });

//             }
//    });
}
}
})

}