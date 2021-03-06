<?php
/**
 * i-MSCP CronJobs plugin
 * Copyright (C) 2014-2015 Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @translator Laurent Declercq (nuxwin) <l.declercq@nuxwin.com>
 */

return array(
	'Cron job permissions' => 'Cron job permissions',
	'Cron jobs' => 'Cron jobs',
	'Cron job has been scheduled for addition.' => 'Cron job has been scheduled for addition.',
	'Cron job has been scheduled for activation.' => 'Cron job has been scheduled for activation.',
	'Cron job has been scheduled for deactivation.' => 'Cron job has been scheduled for deactivation.',
	'Cron job has been scheduled for deletion.' => 'Cron job has been scheduled for deletion.',
	'Your cron jobs limit is reached.' => 'Your cron jobs limit is reached.',
	'Cron job has been scheduled for update.' => 'Cron job has been scheduled for update.',
	'An unexpected error occurred: %s' => 'An unexpected error occurred: %s',
	'Bad request.' => 'Bad request.',
	'Edit' => 'Edit',
	'Deactivate' => 'Deactivate',
	'Activate' => 'Activate',
	'Delete' => 'Delete',
	'Url' => 'Url',
	'Shell' => 'Shell',
	'n/a' => 'n/a',
	'Admin / System tools / Cron Jobs' => 'Admin / System tools / Cron Jobs',
	'Interface from which you can add your cron jobs. This interface is for administrators only. Customers have their own interface which is more restricted.' => 'Interface from which you can add your cron jobs. This interface is for administrators only. Customers have their own interface which is more restricted.',
	'Configuring cron jobs requires distinct knowledge of the crontab syntax on Unix based systems. More information about this topic can be obtained on the following webpage:' => 'Configuring cron jobs requires distinct knowledge of the crontab syntax on Unix based systems. More information about this topic can be obtained on the following webpage:',
	'Newbie: Intro to cron' => 'Newbie: Intro to cron',
	'Type' => 'Type',
	'User' => 'User',
	'Command' => 'Command',
	'Status' => 'Status',
	'Actions' => 'Actions',
	'Loading data...' => 'Loading data...',
	'Add cron job' => 'Add cron job',
	'Email' => 'Email',
	'Email to which cron notifications must be sent if any. Leave blank to disable notifications.' => 'Email to which cron notifications must be sent if any. Leave blank to disable notifications.',
	'Minute' => 'Minute',
	'Minute at which the cron job must be executed.' => 'Minute at which the cron job must be executed.',
	'Hour' => 'Hour',
	'Hour at which the cron job must be executed.' => 'Hour at which the cron job must be executed.',
	'Day of month' => 'Day of month',
	'Day of the month at which the cron job must be executed.' => 'Day of the month at which the cron job must be executed.',
	'Month' => 'Month',
	'Month at which the cron job must be executed.' => 'Month at which the cron job must be executed.',
	'Day of week' => 'Day of week',
	'Day of the week at which the cron job must be executed.' => 'Day of the week at which the cron job must be executed.',
	'User under which the cron job must be executed.' => 'User under which the cron job must be executed.',
	'Command to execute...' => 'Command to execute...',
	'Command type' => 'Command type',
	'Url commands are run via GNU Wget while shell commands are run via shell command interpreter (eg. Dash, Bash...).' => 'Url commands are run via GNU Wget while shell commands are run via shell command interpreter (eg. Dash, Bash...).',
	'You can learn more about the syntax by reading:' => 'You can learn more about the syntax by reading:',
	'When using a shortcut in the minute time field, all other time/date fields are ignored.' => 'When using a shortcut in the minute time field, all other time/date fields are ignored.',
	'The available shortcuts are: @reboot, @yearly, @annually, @monthly, @weekly, @daily, @midnight and @hourly' => 'The available shortcuts are: @reboot, @yearly, @annually, @monthly, @weekly, @daily, @midnight and @hourly',
	'Minimum time interval between each cron job execution: %s' => 'Minimum time interval between each cron job execution: %s',
	'Add / Edit Cron job' => 'Add / Edit Cron job',
	'Save' => 'Save',
	'Cancel' => 'Cancel',
	'Are you sure you want to delete this cron job?' => 'Are you sure you want to delete this cron job?',
	'Unknown action.' => 'Unknown action.',
	'Request Timeout: The server took too long to send the data.' => 'Request Timeout: The server took too long to send the data.',
	'An unexpected error occurred.' => 'An unexpected error occurred.',
	'An unexpected error occurred. Please contact your reseller.' => 'An unexpected error occurred. Please contact your reseller.',
	'Client / Web Tools / Cron Jobs' => 'Client / Web Tools / Cron Jobs',
	'This is the interface from which you can add your cron jobs.' => 'This is the interface from which you can add your cron jobs.',
	"Wrong value for the 'Max. cron jobs' field. Please, enter a number." => "Wrong value for the 'Max. cron jobs' field. Please, enter a number.",
	"Wrong value for the 'Cron jobs frequency' field. Please, enter a number." => "Wrong value for the 'Cron jobs frequency' field. Please, enter a number.",
	'The cron jobs frequency is lower than your own limit which is currently set to %s minute.' => array(
		"The cron jobs frequency is lower than your own limit which is currently set to %s minute.",
		"The cron jobs frequency is lower than your own limit which is currently set to %s minutes." // Plural form
	),
	'Cron job permissions were added.' => 'Cron job permissions were added.',
	'Cron job permissions were updated.' => 'Cron job permissions were updated.',
	'Nothing has been changed.' => 'Nothing has been changed.',
	"One or many cron jobs which belongs to the reseller's customers are currently processed. Please retry in few minutes." => "One or many cron jobs which belongs to the reseller's customers are currently processed. Please retry in few minutes.",
	'Cron job permissions were revoked.' => 'Cron job permissions were revoked.',
	'Edit permissions' => 'Edit permissions',
	'Revoke permissions' => 'Revoke permissions',
	'%d minute' => array(
		'%d minute',
		'%d minutes' // Plural form
	),
	'Unlimited' => 'Unlimited',
	'Admin / Settings / Cron Job Permissions' => 'Admin / Settings / Cron Job Permissions',
	'List of resellers which are allowed to give cron job permissions to their customers.' => 'List of resellers which are allowed to give cron job permissions to their customers.',
	'Reseller name' => 'Reseller name',
	'Cron jobs type' => 'Cron jobs type',
	'Cron jobs frequency' => 'Cron jobs frequency',
	'Add / Edit cron job permissions' => 'Add / Edit cron job permissions',
	'Enter a reseller name' => 'Enter a reseller name',
	'Type of allowed cron jobs. Note that the Url cron jobs are always available, whatever the selected type.' => 'Type of allowed cron jobs. Note that the Url cron jobs are always available, whatever the selected type.',
	'Jailed' => 'Jailed',
	'Full' => 'Full',
	'Minimum time interval between each cron job execution.' => 'Minimum time interval between each cron job execution.',
	'In minutes' => 'In minutes',
	'Unknown reseller. Please enter a valid reseller name.' => 'Unknown reseller. Please enter a valid reseller name.',
	'Please enter a reseller name.' => 'Please enter a reseller name.',
	'Are you sure you want to revoke the cron job permissions for this reseller?' => 'Are you sure you want to revoke the cron job permissions for this reseller?',
	'List of customers which are allowed to add cron jobs.' => '',
	'Max. cron jobs' => 'Max. cron jobs',
	'Customer name' => 'Customer name',
	'Enter a customer name' => 'Enter a customer name',
	'0 for unlimited' => '0 for unlimited',
	'Unknown customer. Please enter a valid customer name.' => 'Unknown customer. Please enter a valid customer name.',
	'Please enter a customer name.' => 'Please enter a customer name.',
	'Are you sure you want to revoke the cron job permissions for this customer?' => 'Are you sure you want to revoke the cron job permissions for this customer?',
	'Invalid cron job type: %s' => 'Invalid cron job type: %s.',
	'Invalid notification email.' => 'Invalid notification email.',
	"Value for the '%s' field cannot be empty." => "Value for the '%s' field cannot be empty.",
	"Invalid value for the '%s' field." => "Invalid value for the '%s' field.",
	'Unable to parse time entry.' => 'Unable to parse time entry.',
	"You're exceeding the allowed limit of %s minutes, which is the minimum interval time between each cron job execution." => "You're exceeding the allowed limit of %s minutes, which is the minimum interval time between each cron job execution.",
	'User must be a valid UNIX user.' => 'User must be a valid UNIX user.',
	'Url must not contain any username/password for security reasons.' => 'Url must not contain any username/password for security reasons.',
	'Command must be a valid HTTP URL.' => 'Command must be a valid HTTP URL.',
);
