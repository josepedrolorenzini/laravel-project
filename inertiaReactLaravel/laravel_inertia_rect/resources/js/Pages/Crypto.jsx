
import Layout from '../Layouts/Layouts'
import ProductPage from './Products/ProductPage';


function Crypto() {
  return (
    <div>Crypto
      {/* coingecko 
      CG-WRSxBHyhN8bk4QNr7Lc88NDv	
       */}
      <ProductPage />
    </div>
  )
}
Crypto.layout = page => <Layout children={page} title="Welcome" />

export default Crypto ; 