/**FUNZIONI JS non sono sicuro di volerli inserire */
import { LineChart, Line} from 'recharts';
const data =[{name:'Page A', uv: 400, pv: 2400, at: 2400}]; //an array of objects

const MyChart = () => (
  <LineChart width={600} height={300} data={data}>
    <Line dataKey="uv" />
  </LineChart>
);