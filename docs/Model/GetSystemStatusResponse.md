# GetSystemStatusResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appversion** | **float** | app version no. | 
**sdkversion** | **float** | sdk version no. | 
**baseversion** | **float** | base version no. | 
**apilevel** | **float** | api level no. | 
**peerid** | **string** | user name | 
**displayname** | **string** | display name of user | 
**os** | **string** | os is always tonido_cloud | 
**oem** | **string** |  | 
**needsupdate** | **float** | whether update needed or no | 
**iscritical** | **float** | whether is critical or not | 
**autoupdate** | **float** | whether autoupdate is available or not | 
**needspluginupdate** | **float** | whether it needs plugin update or no | 
**iscriticalpluginupdate** | **float** | whether is critical to update plugin | 
**currentprofile** | **string** | profile name | 
**numpeersonline** | **float** | set to 0 | 
**uptime** | **float** | set to 0 | 
**httpport** | **float** | http port supported buy the service, eg:80 | 
**udpport** | **float** | set to 0 | 
**isonline** | **float** | whether the profile is online or not | 
**relayactive** | **float** | whether the relay is active or not | 
**relayishttps** | **float** | whether relay is https or not | 
**savepassword** | **float** | whether it will save password or not | 
**networkenabled** | **float** | whether network is enabled or not | 
**httpaccess** | **string** | specify httpaccess eg:all | 
**unreadmessages** | **float** | whether any un-read message are there or not | 
**newinvitations** | **float** | whether the system has any new invitation | 
**numgroups** | **float** | specify the number of groups | 
**remoteaccess** | **float** | whether it can be remote accessed or not | 
**isremote** | **float** | whether the system is currently remote or no | 
**upnpenabled** | **float** | if enabled 1 else 0 | 
**upnpactive** | **float** | if active 1 else 0 | 
**servertoken** | **string** | server token number | 
**urlprefix** | **string** | it is always tonidoid.com | 
**logdir** | **string** | log directory | 
**ishttps** | **float** | whether is https or no | 
**privateip** | **float** | specify private ip | 
**serverurl** | **string** | server url of the company | 
**cansearchotherusers** | **float** | whether can search other users or no | 
**licensestring** | **string** | license string of the system | 
**licensedto** | **string** | license to deatails | 
**licensedtill** | **float** | expiry date of license | 
**continueupdate** | **float** | whether to continueupdate or no | 
**storageusage** | **string** | used storage details | 
**sizelimit** | **string** | specifies the size limit | 
**usagepercent** | **float** | specifies the usage percent | 
**availablestorage** | **float** | specifies available storage space | 
**clouduserstatus** | **float** | whether is cloud user status or no | 
**showsharedfiles** | **float** | whether to show shared files or no | 
**showfavorites** | **float** | whether to show favorites or not | 
**email** | **string** | email-id of the profile | 
**authtype** | **string** | authtype is set to default/ad/ldap | 
**userstatus** | **string** | user status can be set to full/guest/disabled | 
**rmclevel** | **float** | rmc level is set 1 | 
**mediasync** | **float** | media sync level is specified | 
**mediasyncstorepath** | **string** | specifies storage sync path | 
**syncapilevel** | **float** | sync api level is set 2 | 
**allownetworkfoldersync** | **float** | whether to allow network folder sync or not | 
**allowbackup** | **float** | whether to allow backup or not | 
**disablemyfiles** | **float** | whether to disable my files or not | 
**networkfoldername** | **string** | specfies network folder name | 
**disableactivity** | **string** | 1|0 - activity panel disabled or enabled | 
**disablelock** | **string** | 1|0 - locking feature disabled or enabled | 
**extendedsearch** | **string** | 1|0 - context search feature disabled or enabled | 
**collapseactivity** | **string** | 1|0 - activity panel hidden or visible | 
**uploadrestrictions** | **string** | specifes the file extension type that is upload restricted | 
**disabledotdot** | **string** | 1|0 - uploading or scanning files with &amp;quot;..&amp;quot; disabled or enabled | 
**disablemusic** | **string** | 1|0 - music playback disabled or enabled | 
**docthumbsenabled** | **string** | 1|0 - thumbnail image preview enabled or disabled for office documents such as doc,docx,pdf etc., | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


