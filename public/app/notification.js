if (window.Vue) {
    new Vue({
        el: "#app",
        data: {
            isLoading: false,
            url: {
                create: "",
                update: "",
                delete: "",
            },
            campaign_id: '',
            notifications_id: "",
            // list: [
            //     { listId: "Informational" },
            //     { listId: "Coupon" },
            //     { listId: "VideoEditor" },
            //     { listId: "LiveCounter" },
            //     { listId: "Conversions" },
            //     { listId: "ConversionsCounter" },
            //     { listId: "Reviews "},
            //     { listId: "Video" },
            //     { listId: "CookieNotification" },
            //     { listId: 'EmojiFeedback '},
            //     { listId: "SocialShare" },
            //     { listId: "ScoreFeedback" },
            //     { listId: "RequestCollector" },
            //     { listId:" CountCollector "},
            // ],
            select: "",
            name: "A new notification",
            notification: [
                {
                name: "A new notification",
                select:''
                }
            ],
            notifications: {
                select:''
            },
            
           
            notificationEdit: {
                name: "",
                title: "",
                description: "",
                image_URL: "",
                image_Alt: "",
                Coupon_code: "",
                Button_URL: "",
                Button_text: "",
                Footer_text: "",
                notification_URL: "",
                Email_Placeholder: "",
                Thank_you_URL: "",
                Video_URL: "",
                Link_URL: "",
                Link_text: "",
                Content_Description: "",
                Content_title: "",
                Input_Placeholder: "",
                select:'',
                id: "",
            },
        },
        methods: {
            createNotification() {
                // alert('frrfr');
                // console.log('dere');
                let formData = new FormData();
                formData.append("_token", $("input[name=_token]").val());
                formData.append("name", this.notification.name);
                formData.append("title", this.notification.title);
                formData.append("description", this.notification.description);
                formData.append("image_URL", this.notification.image_URL);
                formData.append(" image_Alt", this.notification.image_Alt);
                formData.append("Coupon_code", this.notification.Coupon_code);
                formData.append("Button_URL", this.notification.Button_URL);
                formData.append("Button_text", this.notification.Button_text);
                formData.append("Footer_text", this.notification.Footer_text);
                formData.append('campaign_id',this.campaign_id);
                formData.append(
                    "notification_URL",
                    this.notification.notification_URL
                );
                formData.append(
                    "Email_Placeholder",
                    this.notification.Email_Placeholder
                );
                formData.append(
                    "Thank_you_URL",
                    this.notification.Thank_you_URL
                );
                formData.append("Link_URL", this.notification.Link_URL);
                formData.append("Link_text", this.notification.Link_text);
                formData.append(
                    "Content_Description",
                    this.notification.Content_Description
                );
                formData.append(
                    "Input_Placeholder",
                    this.notification.Input_Placeholder
                );
                formData.append(
                    "Content_title",
                    this.notification.Content_title
                );
                formData.append("Video_URL", this.notification.Video_URL);

                formData.append('select',this.notification.select);
                this.isLoading = true;

                axios
                    .post(this.url.create, formData)
                    .then((response) => {
                        // console.log(response.data)
                        $("#exampleModal1").modal("hide");
                        let data = response.data;
                        this.isLoading = false;
                        // alert(data.url);
                        
                        window.location.href = data.url
                        // let url = windows.location.href
                        this.$notify({  
                            title: "Success",
                            message: response.data.message,
                            type: "success",
                        });


                        // console.log(response.data)

                        this.notifications.push(
                            Object.assign({}, response.data.notification, {})
                        );
                    })
                    .catch((error) => {
                        this.isLoading = false;
                        this.$notify({
                            title: "Error",
                            message: error.response.data.message,
                        });
                        // if (error.response) {
                        //     this.$notify({
                        //         title: "Error",
                        //         message: error.response.data.message,
                        //     });
                        // } else {
                        //     this.$notify.error({
                        //         title: "Error",
                        //         // message: "oops! Unable to complete request.",
                        //     });
                        // }
                    });
            },
            
            selectNotification(index) {
                this.notificationEdit = Object.assign(
                    {},
                    this.notifications[index]
                );
                // console.log('edit',this.campaignEdit);
            },
            update_Notification() {

                // alert(this.notificationEdit.id);
                const formData = new FormData();
                formData.append("_token", $("input[name=_token]").val());
                formData.append("name", this.notification.name);
                formData.append('campaign_id',this.campaign_id);
                formData.append('id',this.notificationEdit.id);
                formData.append("title", this.notification.title);
                formData.append("description", this.notification.description);
                formData.append("image_URL", this.notification.image_URL);
                formData.append(" image_Alt", this.notification.image_Alt);
                formData.append("Coupon_code", this.notification.Coupon_code);
                formData.append("Button_URL", this.notification.Button_URL);
                formData.append("Button_text", this.notification.Button_text);
                formData.append("Footer_text", this.notification.Footer_text);
                formData.append('select',this.notification.select);
                formData.append(
                    "notification_URL",
                    this.notification.notification_URL
                );
                formData.append(
                    "Email_Placeholder",
                    this.notification.Email_Placeholder
                );
                formData.append(
                    "Thank_you_URL",
                    this.notification.Thank_you_URL
                );
                formData.append("Link_URL", this.notification.Link_URL);
                formData.append("Link_text", this.notification.Link_text);
                formData.append(
                    "Content_Description",
                    this.notification.Content_Description
                );
                formData.append(
                    "Input_Placeholder",
                    this.notification.Input_Placeholder
                );
                formData.append(
                    "Content_title",
                    this.notification.Content_title
                );
                formData.append("Video_URL", this.notification.Video_URL);
                this.isLoading = true;

                axios
                    .post(this.url.update, formData)
                    .then((response) => {
                        $("#update_notification").modal("hide");
                        this.isLoading = false;

                        this.$notify({
                            title: "Success",
                            message: response.data.message,
                            type: "success",
                        });

                        var notification = response.data.notification;
                        this.notifications = this.notifications.map(
                            (notification) => {
                                if (notification.id === notification.id) {
                                    notification = Object.assign(
                                        {},
                                        notification
                                    );
                                }
                                return notification;
                            }
                        );

                        // $('.data-table-custom').DataTable().destroy();
                        // $('.data-table-custom').DataTable();
                    })
                    .catch((error) => {
                        this.isLoading = false;
                        if (error.response) {
                            this.$notify.error({
                                title: "Error",
                                message: error.response.data.message,
                            });
                        } else {
                            this.$notify.error({
                                title: "Error",
                                message: "oops! Unable to complete request.",
                            });
                        }
                    });
            },
            deleteNotification(index) {
                // console.log('this....', this.isLoading);
                //  alert(index);
                // console.log('index',index);
                let notification = Object.assign({}, this.notifications[index]);
                notification._token = $("input[name=_token]").val();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios
                            .delete(this.url.delete, { data: notification })
                            .then((response) => {
                                this.isLoading = false;
                                this.notifications.splice(index, 1);
                                this.$notify({
                                    title: "Success",
                                    message: response.data.message,
                                    type: "success",
                                });

                                Swal.fire(
                                    "Deleted!",
                                    response.data.message,
                                    "success"
                                );
                            })
                            .catch((error) => {
                                // console.log('error', error)

                                Swal.fire("Deleted!", "failed!", "error");
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
                });
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
            },
        },
        mounted() {
            this.campaign_id = $("#campaign_id").val();
            this.notificationEdit.id = window.location.pathname.substring(14);
          
            // var ids= this.notifications_id;
            this.notifications.id = $("#notificationsID").val();
            // console.log(this.notifications.id);
            this.select = $("#select").val();
            this.notifications = JSON.parse($("#notifications").val());  
            // this.notifications = JSON.parse($("#campaigns").val());
            // console.log(this.notifications)
            this.url.create = $("#create-url").val();
            this.url.update = $("#update-url").val();
            this.url.delete = $("#delete-url").val();
        },
    });
}
