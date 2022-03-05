if (window.Vue) {
new Vue ({
    el: '#app' ,
    isLoading: false,
        data : {
        url: {
            create : "",
            update: "",
            delete: ""
        },
        campaign: {
            name : '',
            domain: '',
            include_subdomain: ''
        },
        campaigns: [
        {
            include_subdomain:'',
            name: '',
            domain:'',
            id: ''
        }
        ],
        campaignEdit: {
        id: '',
        name: '',
        domain:'',
        include_subdomain:''
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
    update_campaign(){
        const formData = new FormData();
        formData.append('_token', $('input[name=_token]').val());
        formData.append('campaign_domain', this.campaignEdit.domain);
        formData.append('campaign_name', this.campaignEdit.name);
        formData.append('campaign_id', this.campaignEdit.id);
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
                this.campaigns = this.campaign.map((campaign) => {
                    if (campaign.id === campaign.id) {
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
        alert('ref');
        let campaign = Object.assign({}, this.campaigns[index]);
        campaign._token = $('input[name=_token]').val();

        const customAlert = swal({
            title: 'Warning',
            text: `Are you sure you want to delete this Company? This action cannot be undone.`,
            icon: 'warning',
            closeOnClickOutside: false,
            buttons: {
                cancel: {
                    text: "cancel",
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: "Confirm",
                    value: 'delete',
                    visible: true,
                    className: "btn-danger",
                }
            }
        });

        customAlert.then(value => {
            if (value == 'delete') {
                this.isLoading = true;
                axios.delete(this.url.delete, {data: campaign})
                    .then(response => {
                        this.isLoading = false;
                        this.campaigns.splice(index, 1);
                        this.$notify({
                            title: 'Success',
                            message: response.data.message,
                            type: 'success'
                        });

                    }).catch(error => {
                        if (error.response) {
                            this.isLoading = false;
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

                }
            });
        }
    }
})
}