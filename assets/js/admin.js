import React from 'react';
import ReactDOM from 'react-dom';
import { HydraAdmin } from '@api-platform/admin';
import authProvider from './src/authProvider';


const entrypoint = document.getElementById('api-entrypoint').innerText;

ReactDOM.render(<HydraAdmin authProvider={authProvider} entrypoint={entrypoint}/>, document.getElementById('api-platform-admin'));

